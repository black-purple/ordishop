// i
let imgContainer=document.querySelector(".img-container");
let imageBox=document.querySelector("#imageBox");
let canvas=document.querySelector("#canvas");
let imgRect=imageBox.getBoundingClientRect();
let imgText=canvas.getContext("2d");
function imgPrd(img){
    imageBox.src=img.src;
}
// // zoom Image
imageBox.addEventListener("mousemove",function(e){
  let x = e.offsetX ;
  let y = e.offsetY ; 
     let imgX= x+imgRect.x;
     let imgY= y+imgRect.y;

   canvas.style.display="block";
   canvas.style.top=imgY+"px";
   canvas.style.left=imgX+"px";
   imgText.drawImage(imageBox,x,y,200,200,0,0,300,300)

});
imageBox.addEventListener("mouseout",function(){
  canvas.style.display="none";
})
