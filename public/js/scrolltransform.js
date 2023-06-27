function transformScroll(event) {
    if (!event.deltaY) {
        return;
    }

    event.currentTarget.scrollLeft += event.deltaY + event.deltaX;
    
    }

    var element = document.scrollingElement || document.documentElement;
    element.addEventListener('wheel', transformScroll);