// $('.holiday_type_ranges').change(function (e) {
//     let value = $(this).val();
//     // TODO: remaining code here..
// });

$('[data-changerel]').each(function (i, e) {
    let t = $(e).data('changerel');
    let v = $(e).val()
    $('[data-perc=' + t + ']').html(`${v * 10}%`);
});

$('[data-changerel]').change(function (e) {
    let t = $(this).data('changerel');
    let v = $(this).val()
    $('[data-perc=' + t + ']').html(`${v * 10}%`);
});

function checkRangesValidation() {
    $('.holiday_type_ranges').removeClass('flash is-invalid');

    let valids = 0;
    $('.holiday_type_ranges').each(function (i, e) {
        if ($(e).val() === '0') {
        } else {
            valids++;
        }
    });

    if (valids > 0) {
        $('.holiday_type_ranges').removeClass('is-invalid flash');
        return true;
    } else {
        $('.holiday_type_ranges').addClass('flash').addClass('is-invalid');
        return false;
    }

    return valids === 0;
}

$('.holiday_type_ranges').change(function (e) {
    if ($(this).val() !== '0') {
        $('.holiday_type_ranges').removeClass('is-invalid');
    } else {
        $('.holiday_type_ranges').addClass('is-invalid');
    }
});

function scrollToInvalidElements() {
    console.log('scrollToInvalidElements');

    $('.is-invalid').removeClass('is-invalid');

    // add is-invalid to all invalid elements other than form
    $(':invalid').not('form').addClass('is-invalid');

    // scroll animate to the invalid element location
    $('body').animate({
        scrollTop: $('.is-invalid').first().offset().top - 100
    }, 1000);

    $('.is-invalid').first().focus();
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                let checkedValidation = checkRangesValidation();
                if (form.checkValidity() === false || !checkedValidation) {
                    event.preventDefault();
                    event.stopPropagation();

                    if (!checkedValidation) {
                        // flash the block
                        $('.holiday_type_ranges').addClass('is-invalid flash');

                        // scroll animate to the location $('.holiday_type_ranges').first().offset().top
                        $('body').animate({
                            scrollTop: $('.holiday_type_ranges').first().offset().top - 100
                        }, 1000);

                        alert('You must provide at least one kind of holiday type preference.');
                    } else {
                        alert('You have to fill all mandatory fields.');
                    }

                    scrollToInvalidElements();
                } else {
                    console.log('form was validated');
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
