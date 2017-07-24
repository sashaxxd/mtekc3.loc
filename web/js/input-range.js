$(document).ready(function()
{
    // webshim.setOptions('forms-ext', {
    //     replaceUI: 'auto',
    //     types: 'range',
    //     widgets: {
    //         number: {
    //             calculateWidth: false
    //         }
    //     }
    // });
    // webshim.polyfill('forms forms-ext');

    $(function(){
        $('.number-range-combi').combineNumberRange();
    });

    //simple jQuery plugin adjust to your needs
    $.fn.combineNumberRange = function(){
        return this.each(function(){
            var timer;
            var range = $('input[type="range"]', this);
            var number = $('input[type="number"]', this);

            function onRangeChange(){
                number.val(range.val());
            }

            function onNumberChange(){
                if(number.is(':valid')){
                    range.val(number.val());
                }
            }

            range.on('input change', function(){
                clearTimeout(timer);
                timer = setTimeout(onRangeChange, 0);
            });
            number.on('input change', function(){
                clearTimeout(timer);
                timer = setTimeout(onNumberChange, 0);
            });
        });
    };
});