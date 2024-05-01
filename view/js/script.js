function Clock(){
    let time = new Date();
    let hr = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
    if(hr < 10){
        hr = "0" + hr;
    }
    if(min < 10){
        min = "0" + min;
    }
    if(sec < 10){
        sec = "0" + sec;
    }
    $('#clock').text(hr + ":" + min + ":" + sec);
    setTimeout("Clock()", 1000);
}
Clock();