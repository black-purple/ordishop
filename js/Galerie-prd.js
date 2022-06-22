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
});

// // like dislike

let likeBtn=document.querySelector(".btn-like");
let iconBtn=document.querySelector("#icon");
let count=document.querySelector("#count");

let btndis=document.querySelector(".btn-dislike");
let icondis=document.querySelector("#iconDis");
let countdis=document.querySelector("#countDis");

let click=false;



likeBtn.addEventListener("click",function(){ 
  if(!click){
  //  alert("like");
    click=true;
    iconBtn.innerHTML=`<i class="bi bi-hand-thumbs-up-fill fs-4"></i>`;
    icondis.innerHTML=`<i class="bi bi-hand-thumbs-down fs-4"></i></i>`;
    count.textContent++;
 
  }
  else{
  //  alert("0 like");
    click=false;
    iconBtn.innerHTML=`<i class="bi bi-hand-thumbs-up fs-4"></i>`;
    count.textContent--;
  }

});



btndis.addEventListener("click",function(){ 
  if(!click){
  //  alert("like");
    click=true;
    icondis.innerHTML=`<i class="bi bi-hand-thumbs-down-fill fs-4"></i>`;
    iconBtn.innerHTML=`<i class="bi bi-hand-thumbs-up fs-4"></i>`;
    countdis.textContent++;
  }
  else{
  //  alert("0 like");
    click=false;
    icondis.innerHTML=`<i class="bi bi-hand-thumbs-down fs-4"></i></i>`;
    countdis.textContent--;
  }

});


// jquery ↻ Charger plus d'avis
$(".product-review").slice(0,3).show();
$(".plus").on("click",function(){
  // alert("hello");
  $(".product-review:hidden").slice(0,1).show();
  if($(".product-review:hidden").length==0){
    $(".plus").fadeOut();
  }
});