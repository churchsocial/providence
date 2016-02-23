//= include jquery.js
//= include jquery.fitvids.js

$(document).ready(function(){
    $('.wysiwyg').fitVids({
        customSelector: "iframe[src*='ustream.tv'], iframe[src*='livestream.com']"
    });
});