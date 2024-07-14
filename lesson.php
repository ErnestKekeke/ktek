<!DOCTYPE html>
<html>



<script>
document.onreadystatechange = function () {
    if (document.readyState === "interactive") {
        let btn = document.getElementById('btn');
        let p = document.getElementById('p');
        let result = null;

        let ageNo = 34;

        var data = new FormData();
        data.append('age', ageNo);
        data.append('name', 'john');

        btn.addEventListener('click', function(){

            const ajax = new XMLHttpRequest();
            ajax.open('POST', 'simple_text.php');
            // ajax.setRequestHeader('Content-type', '');

            ajax.addEventListener('load', function(){
                console.log(ajax.status);
                console.log(ajax.responseText);
                p.innerHTML = ajax.responseText;
            })
        
            ajax.send(data);
        });
    
    }
}

</script>

<p id='p'>Hello World!</p>
<button id="btn">Love Me</button>


</html>