$('a[href^="http"]').not('[href^="'+location.protocol+'//'+location.host+'"]').click(function(){
$(this).attr('target', '_blank');
});

// Effet d'arriver

const ratio = .1;
const visible = {
root: null,
rootMargin: '0px' ,
threshold: ratio
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function(entry){
         if (entry.intersectionRatio > ratio){
         entry.target.classList.add('reveal-visible');
         observer.unobserve(entry.target); // Arret d'observation après première apparition. 
    } else {
         
    }
    })
}
const observer = new IntersectionObserver(handleIntersect, visible);
const reveal = document.querySelectorAll('.reveal').forEach(function (r){
    observer.observe(r);
})

/**
 * Controle mail
 */
function controlMail(mail) {
    if (!mail.val().includes(".") || !mail.val().includes("@") || mail.val().length < 5) { 
        return true;
    }
}

/**
 * Disable form suite submit
*/

function disableForm(inp) {
    inp.each(function() {
        $(this).val("");
        $('.container-disable').show(300);
    })
}

$("#form-contact").submit(function(e) {

    e.preventDefault();

    $('.response-form').show();
    let responseForm = $('.response-form');

    if (
        $('#name').val() == '' ||
        $('#email').val() == '' ||
        $('#phone').val() == '' ||
        $('#message').val() == ''
    ) {

        responseForm.html('Veuillez remplir tous les champs');
        return false;    
    }
    else if (controlMail($('#email')) == true) {
        responseForm.text('Adresse Email incorrect');
        return false;
    }
    else {
        $.ajax({
            type: $("#form-contact").attr('method'),
            url: $("#form-contact").attr('action'),
            data: $("#form-contact").serialize(),
            dataType: 'json',
    
            success: function(data) {
                $('.response-form').text(data.content);
                $('.response-form').css('color' , "#038a38");

                disableForm($('.input-disable'));
            },
            error: function(data) {    
                $('.response-form').text(data.content);        
            }
        })
    }   
})

