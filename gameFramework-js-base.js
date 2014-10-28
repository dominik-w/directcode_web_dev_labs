/**
 * DC Game Framework - base
 */

DC_GF = {};

/**
 * Animation object
 */
DC_GF.animation = function(options) {
    var defaultValues = {
        url : false,
        width : 64,
        numberOfFrames : 1,
        currentFrame : 0,
        rate : 30
    }
    $.extend(this, defaultValues, options);
    if (this.url) {
        DC_GF.addImage(this.url);
    }
}

/**
 * Set current frame
 */
DC_GF.setFrame = function(divId, animation) {
    $("#" + divId).css("bakgroundPosition", "" + animation.currentFrame * animation.width + "px 0px");
}

DC_GF.animationHandles = {};

/**
 * Set up an animation for the sprite
 */
DC_GF.setAnimation = function(divId, animation, loop) {
    if (DC_GF.animationHandles[divId]) {
        clearInterval(DC_GF.animationHandles[divId]);
    }
    if (animation.url) {
        $("#"+divId).css("backgroundImage", "url('"+animation.url+"')");
    }
    if (animation.numberOfFrame > 1) {
        DC_GF.animationHandles[divId] = setInterval(function(){
            animation.currentFrame++;
            if (!loop && currentFrame > animation.numberOfFrame) {
                clearInterval(DC_GF.animationHandles[divId]);
                DC_GF.animationHandles[divId] = false;
            } else {
                animation.currentFrame %= animation.numberOfFrame;
                DC_GF.setFrame(divId, animation);
            }
        }, animation.rate);
    }
}

/**
 * Add sprite to div
 */
DC_GF.addSprite = function(parentId, divId, options) {
    var options = $.extend({
        x: 0,
        y: 0,
        width: 64,
        height: 64
    }, options);
    
    $("#"+parentId).append("<div id='"+divId+"' style='position: absolute; left:"+options.x+"px; top: "+options.y+"px; width: "+options.width+"px ;height: "+options.height+"px'></div>");
}


/**
 * Get/set position on the x-axis
 */
DC_GF.x = function(divId, position) {
    if (position) {
        $("#"+divId).css("left", position); 
    } else {
        return parseInt($("#"+divId).css("left")); 
    }
}

/**
 * * Get/set position on the y-axis
 */
DC_GF.y = function(divId, position) {
    if (position) {
        $("#"+divId).css("top", position); 
    } else {
        return parseInt($("#"+divId).css("top")); 
    }
}

DC_GF.imagesToPreload = [];

/**
 * Preload - add images
 */
DC_GF.addImage = function(url) {
    if ($.inArray(url, DC_GF.imagesToPreload) < 0) {
        DC_GF.imagesToPreload.push();
    }
    DC_GF.imagesToPreload.push(url);
};

/**
 * Preload - start
 */
DC_GF.startPreloading = function(endCallback, progressCallback) {
    var images = [];
    var total = DC_GF.imagesToPreload.length;
    
    for (var i = 0; i < total; i++) {
        var image = new Image();
        images.push(image);
        image.src = DC_GF.imagesToPreload[i];
    }
    var preloadingPoller = setInterval(function() {
        var counter = 0;
        var total = DC_GF.imagesToPreload.length;
        for (var i = 0; i < total; i++) {
            if (images[i].complete) {
                counter++;
            }
        }
        if (counter == total) {
            // done!
            clearInterval(preloadingPoller);
            endCallback();
        } else {
            if (progressCallback) {
                count++;
                progressCallback((count / total) * 100);
            }
        }
    }, 100);
}; 


