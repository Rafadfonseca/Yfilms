const accordionContent = document.querySelectorAll(".accordion-content");

accordionContent.forEach((item, index ) => {
    let header = item.querySelector(".header");
    header.addEventListener("click", () =>{
        item.classList.toggle("open");

        let descricao = item.querySelector(".descricao");
        if(item.classList.contains("open")){
            descricao.style.height = `${descricao.scrollHeight}px`;
            item.querySelector("i").classList.replace("fa-plus","fa-minus");
        }else{
            descricao.style.height = "0px"
            item.querySelector("i").classList.replace("fa-minus","fa-plus");
        }
        removeOpen(index);
    })
})

function removeOpen(index1){
    accordionContent.forEach((item2, index2) => {
        if(index1 != index2){
            item2.classList.remove("open");

            let des = item2.querySelector(".descricao");
            des.style.height = "0px";
            item2.querySelector("i").classList.replace("fa-minus","fa-plus");

        }
    })
}