$(document).ready(function() {
    $.getJSON('json/symptoms.json', function(data) {
        $('#symptom-title').html(data.content[0].title);
        $('#symptom-text').html(data.content[0].text);
    });
});

$('#symptom-list li').on('click', function(el) {
    $.getJSON('json/symptoms.json', function(content) {
        $('#symptom-list li').removeClass('selected');
        console.log($(el).data('id'));
    });
});