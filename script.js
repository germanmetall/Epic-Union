function headerChange(){
    if(window.scrollY >= 100){
        document.querySelectorAll(".navbar__link").forEach(link => {
            link.classList.add("navbar__link--colored");
        });
        document.querySelector(".header").classList.add("header--colored");
    }
    else{
        document.querySelectorAll(".navbar__link").forEach(link => {
            link.classList.remove("navbar__link--colored");
        });
        document.querySelector(".header").classList.remove("header--colored");
    }
}

window.onload = () => {
    headerChange();
    arrows = document.querySelectorAll(".svg__arrow");

    arrows.forEach((el, ind) => {
        el.addEventListener("click", ()=>{
            document.querySelector(".slider").style.transform = "translateX("+(-(ind*2)+1)*50+"%)";
        });
    });
    window.addEventListener("scroll", (e)=>{
        headerChange();
    });
}