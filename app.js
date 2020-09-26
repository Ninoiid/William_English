const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    
    
    burger.addEventListener('click',() => {
        //toggle Nav
        nav.classList.toggle('nav-active');
        
        //Animation Links
        navLinks.forEach((link, index) => {
          if(link.style.animation){
            link.style.animation = ''; 
          } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
          }
        
        });
        
        //Burger Animation
        
        burger.classList.toggle('toggle');
        
    });   
}

navSlide();

//Floating Header

window.addEventListener('scroll', () => {   
    const scrolled = window.scrollY;  
    var head = document.getElementById("hdr");
    var logo = document.getElementById("lgo");
    var navigation = document.getElementById("nv");
        
         if (scrolled > 100 ){ //if scrolled down
             head.classList.remove('header');
             head.classList.add('header-float');
             logo.classList.remove('show-lgo');
             logo.classList.add('hide-lgo');
             navigation.classList.remove('nav-full');
             navigation.classList.add('nav-scrolled');
             //console.log('down');
             
         } else { //if you scroll up
             head.classList.remove('header-float');
             head.classList.add('header');
             logo.classList.remove('hide-lgo');
             logo.classList.add('show-lgo');
             navigation.classList.remove('nav-scrolled');
             navigation.classList.add('nav-full');
             //console.log('up'); 

         }
        
    });
    
