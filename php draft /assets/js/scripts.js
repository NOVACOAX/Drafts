$(document).ready(function () {


});

// Get current date yyyy-mm-dd 
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();
    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;
    return [year, month, day].join('-');
}

// Get current time hh:mm:ss 
function formatTime(date) {
    var date = new Date(date),
        hour = '' + date.getHours(),
        min = '' + date.getMinutes(),
        sec = '' + date.getSeconds();
    if (hour.length < 2) 
        hour = '0' + hour;
    if (min.length < 2) 
        min = '0' + min;
    if (sec.length < 2) 
        sec = '0' + sec;
    return [hour, min ,sec].join(':');
}

