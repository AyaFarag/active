# jquery photoslider for landscape and portrait images

jQuery photoslider is a simple plugin to display landscape and portrait images. This slider is capable of looping. You can add touch gestures for example with hammer.js

Demo: [https://bdiekert.github.io/jquery-photoslider/demo/demo.html](https://bdiekert.github.io/jquery-photoslider/demo/demo.html)

## How to use

Include photoslider.min.js and photoslider.css alongside jQuery in your markup:

```html
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!-- jQuery photoslider -->
<link rel="stylesheet" href="photoslider.css">
<script src="photoslider.js"></script>
```

The basic markup for the photoslider is like this:

```html
<div class="photoslider">

    <div class="photoslider__item">
        <img src="files/01.png">
    </div>  
      
    <!-- MORE ITEMS -->

</div>
```

For every slider item you should set data-width and data-height. These should match the dimensions of your image inside your item container:

```html
<div class="photoslider__item" data-width="500" data-height="500">
    <img src="files/01.png">
</div>
```

To display a straightforward and short description, you can use a description container after your image:

```html
<div class="photoslider__item" data-width="500" data-height="500">
    <img src="files/01.png">
    <div class="photoslider__item__description">A simple description</div>
</div>
```

To enable your photoslider for the container with your slider items just call the plugin on that element:

```html
<script>
$('.photoslider').photoslider();
</script>
```

If you want to set more than the default options for this plugin set them as array in the first parameter of the plugin call:

```html
<script>
$('.photoslider').photoslider({
    'autoplay': false
});
</script>
```

## Parameters

| Option         | Values                                                                                       | Default       |
|:---------------|:---------------------------------------------------------------------------------------------|:--------------|
| autoplay       | slider autoplay - true / false                                                               | true          |
| duration       | pause for next slide when autoplay is activated in ms                                        | 3000          |
| speed          | speed for CSS animation in ms (should match transition-duration for .photoslider--animation) | 400           |
| resize         | resize slider item height -- true / false                                                    | true          |
| prefix         | CSS class prefix                                                                             | 'photoslider' |
| navigation     | build navigation -- true / false                                                             | true          |
| navigationPrev | build prev button -- true / false                                                            | true          |
| navigationNext | build next button -- true / false                                                            | true          |
| prevText       | label for prev button                                                                        | 'PREV'        |
| nextText       | label for next button                                                                        | 'NEXT         |

## jQuery versions & browser support

The photoslider should function properly if your browser supports CSS animations.

## License

This jQuery plugin licensed under the unlicensed license. Please do whatever you like and tell me about it!
