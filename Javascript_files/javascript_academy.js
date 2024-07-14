// let imgInput =  document.getElementById("image_input");
// let userPhoto = document.getElementById("user_photo");

// imgInput.addEventListener("change", function(){
// let userPhotoUrl = window.getComputedStyle(userPhoto).getPropertyValue("content");
    
//     if(this.files.length==1){

//         // console.log(this.files[0]);
//         // userPhoto.style.content = URL.createObjectURL(this.files[0]);

//         const reader = new FileReader

//         reader.addEventListener("load", function(){
//             userPhoto.src = reader.result;
//         });
//         reader.readAsDataURL(this.files[0]);

//        console.log(reader);
  
        
        
        
//     }else{
//        userPhotoUrl = userPhotoUrl.split("/gallery/");
//        userPhotoUrl = userPhotoUrl[0];
//        userPhoto.style.content =   userPhotoUrl+"/gallery/"+"female_sample_photo.png"+"\"\)";
//     }

// })

let studentPicUpload =  document.getElementById("studentPicUpload");
let studentPicProfile =  document.getElementById("studentPicProfile");
let maxPicSize = 200000

studentPicUpload.addEventListener("change", function(){
    console.log("music is playing!!");
    if(this.files.length==1){

        if(this.files[0].size>maxPicSize){
            alert(this.files[0].name + " is over 200kb \n choose a smaller size");
        }

        if(this.files[0].size<maxPicSize){

        const reader = new FileReader

        reader.addEventListener("load", function(){
            studentPicProfile.src = reader.result;
        });
        reader.readAsDataURL(this.files[0]);

       console.log(reader);
  
            
        }
          
    }
})


