console.log("device-width", window.innerWidth);

let ktekImgDisplay1 = document.querySelectorAll(".ktek_img_display");
let ktekImgDisplay2 = document.querySelectorAll(".ktek_img_display2");
let imageDisplayContainer = document.querySelector(".image_display_container");

let imgDisp = document.getElementById("img_disp");

let j = false;


// let backgroundImg = window.getComputedStyle(image).getPropertyValue("background-image");
// document.body.style.backgroundImage = "url('img_tree.png')";


ktekImgDisplay1.forEach(kImgDisp1=>{
    
    kImgDisp1.addEventListener("click", function(){
        let imageName = "";
        let imgDispContent;
        j = !j;
        imageName = kImgDisp1.src;
        imageName = imageName.split("/gallery/")[1];

        imgDispContent = window.getComputedStyle(imgDisp).getPropertyValue("content");
        imgDispContent = imgDispContent.split("/gallery/");
        imgDispContent = imgDispContent[0];
        imgDispContent = imgDispContent+"/gallery/"+imageName+"\"\)";
        console.log(imgDispContent);
        imgDisp.style.content = imgDispContent;
        
        console.log(imageName);
        console.log(j);
        displayImgOnScreen(imageDisplayContainer); //just to show up the div
    });

});

// ............

ktekImgDisplay2.forEach(kImgDisp2=>{
    
    kImgDisp2.addEventListener("click", function(){
        let imageName = "";
        let imgDispContent;
        j = !j;
        imageName = kImgDisp2.id;

        imageName = imageName.split("_");
        imageName = imageName[1];

        console.log(imageName);

        imgDispContent = window.getComputedStyle(imgDisp).getPropertyValue("content");
        imgDispContent = imgDispContent.split("/gallery/");
        imgDispContent = imgDispContent[0];
        imgDispContent = imgDispContent+"/gallery/"+imageName+".jpg"+"\"\)";
        console.log(imgDispContent);
        imgDisp.style.content = imgDispContent;

       
        displayImgOnScreen(imageDisplayContainer);
    });

});


imageDisplayContainer.addEventListener("click", function(){
    j= false;
    displayImgOnScreen(imageDisplayContainer);
})

function displayImgOnScreen(img){
    if(j){
        img.style.display = "flex";
    }else{
        img.style.display = "none";
    }
  
}




//////////////////////////////////////////////// for phone menu;



let i = 0;

let phoneMenu = document.getElementById("phone_menu");
let phoneMenu2 = document.getElementById("phone_menu2");

phoneMenu.addEventListener("click", function(){
    switchPhoneMenu(phoneMenu, phoneMenu2, "none", "block");
});

phoneMenu2.addEventListener("click", function(){
    switchPhoneMenu(phoneMenu, phoneMenu2, "flex", "none");
});


function switchPhoneMenu(menuA, menuB, msgA, msgB){
    menuA.style.display = msgA;
    menuB.style.display = msgB;
}


// ............................................. user contact form//

let userBtn = document.getElementById("userBtn");
let userFirstName = document.getElementById("userFirstName");
let userLastName = document.getElementById("userLastName");
let userTel = document.getElementById("userTel");
let userEmail = document.getElementById("userEmail");
let userMsg = document.getElementById("userMsg");
let userContactFormPass = true;

const numRegx = /^\+?\d{5,20}$/;
const nameRegx = /^[a-zA-Z]{2,30}$/;
const emailRegx = /^([a-z 0-9 A-Z \- \.]+)@([a-z A-Z \. \- 0-9]+)\.([a-z A-Z \-]{1,8})([a-z A-Z \-]{1,8})?$/;


let userContactFormSpan = document.querySelectorAll("form[id = 'userContact'] span");



userBtn.addEventListener("click", userContactForm);

function userContactForm(event){
    userContactFormSpan[3].removeAttribute('id', 'formerror');
    userContactFormSpan[3].setAttribute('id', 'formcorrect'); 
  
    userContactFormPass = true;

    userFirstName.value = userFirstName.value.trim();
    userLastName.value = userLastName.value.trim();
    userTel.value = userTel.value.trim();
    userEmail.value = userEmail.value.trim();
    
    

    regxCheck(nameRegx, userFirstName.value, 0);
    regxCheck(nameRegx, userLastName.value, 1);
    regxCheck(numRegx, userTel.value, 2);
    regxCheck(emailRegx, userEmail.value, 4);

    if(userMsg.value.length>10){
        userContactFormSpan[5].removeAttribute('id', 'formerror');
        userContactFormSpan[5].setAttribute('id', 'formcorrect');  
    }else{
        userContactFormSpan[5].removeAttribute('id', 'formcorrect');
        userContactFormSpan[5].setAttribute('id', 'formerror'); 
        userContactFormPass = false; 
        
    }

    if(userContactFormPass){
       let msgSent =  window.confirm(userFirstName.value+" Do you want to send this message?");
       if(!msgSent){
        event.preventDefault();
        window.location.assign("index.php"); // open in current page 
       }else{

       }
        // userFirstName.value = "";;
        // userLastName.value = "";
        // userTel.value = "";
        // userEmail.value = "";
        // userMsg.value = "";
    }else{
        event.preventDefault();
        userFirstName.value = capWord(userFirstName.value);
        userLastName.value = capWord(userLastName.value);
        window.alert("please check for RED's or \nMaybe message is too short !!");
    }
}

function regxCheck(regx, msg, n){
    if(regx.test(msg)){
        userContactFormSpan[n].removeAttribute('id', 'formerror');
        userContactFormSpan[n].setAttribute('id', 'formcorrect');  
    }else{
        userContactFormSpan[n].removeAttribute('id', 'formcorrect');
        userContactFormSpan[n].setAttribute('id', 'formerror');   
        userContactFormPass = false;
    }
}



function capWord(msg){
    if(msg.length>0){
        msg = msg.trim().toLowerCase();
        msg = msg[0].toUpperCase()+msg.substring(1, msg.length);
        return msg;
    }
    return "";
}


