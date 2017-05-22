$(document).ready(function(){
   $('#bgVid').addEventListener('timeupdate', function () {
        if(this.currentTime >= 5.0) {
            this.currentTime = 0.0;
        }
    }); 
});