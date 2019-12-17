function toggleMenu() {
    menu.classList.toggle('menu-on');
    burger.classList.toggle('menu-on');
    menu.classList.toggle('menu-off');
    burger.classList.toggle('menu-off');
}

const menu = document.getElementById('menu');
const burger = document.getElementById('burger');

document.addEventListener("click", function(event) {
    // console.log(event.target);
    
    if (event.target.classList.contains('menu-open')) {
        // console.log('menu-open');
        event.preventDefault();
        toggleMenu();
    }
    else if (event.target.classList.contains('menu-close')) {
        // console.log('menu-close');
        event.preventDefault();
        toggleMenu();
    }
    else if (
        event.target.parentNode.classList.contains('menu-item')
    ) {
        let childs = event.target.parentNode.childNodes;
        for (let i = 0 ; i < childs.length ; i++) {
            if (childs[i].tagName == 'UL') {
                if (childs[i].classList.contains('sub-menu')) {
                    document.querySelectorAll('.sub-menu').forEach(el => el.classList.remove('submenu-on'));
                    childs[i].classList.toggle('submenu-on');
                }
            }
        }
    }
    else if (
        menu.classList.contains('menu-on') && 
        event.target.id != 'menu' && 
        event.target.tagName != 'LI') {
            toggleMenu();
    }
    
});

const categoriesWidget = document.querySelector('.widget_categories ul');
if (categoriesWidget) {
    let categoryAllLi = document.createElement("li");
    let categoryAllA = document.createElement("a");
    categoryAllA.textContent = "Toutes";
    categoryAllA.setAttribute('href', window.location.origin + '/blog/');
    categoryAllLi.appendChild(categoryAllA);
    categoriesWidget.appendChild(categoryAllLi);
}
// else {
//     throw new Error('Categories widget not found.');
// }


// var pythonElt = document.createElement("li"); // Création d'un élément li
// pythonElt.id = "python"; // Définition de son identifiant
// pythonElt.textContent = "Python"; // Définition de son contenu textuel
// document.getElementById("langages").appendChild(pythonElt); // Insertion du nouvel élément

// document.addEventListener("click", function(event) {
//     if (
//         event.target.parentNode.classList.contains('menu-item')
//     ) {
//         let childs = event.target.parentNode.childNodes;
//         for (let i = 0 ; i < childs.length ; i++) {
//             if (childs[i].tagName == 'UL') {
//                 if (childs[i].classList.contains('sub-menu')) {
//                     document.querySelectorAll('.sub-menu').forEach(el => el.classList.remove('submenu-on'));
//                     childs[i].classList.toggle('submenu-on');
//                 }
//             }
//         }
//     }
//     else if (event.target.classList.contains('menu-open')) {
//         event.preventDefault();
//         toggleMenu();
//     }
//     else if (event.target.classList.contains('menu-close')) {
//         event.preventDefault();
//         toggleMenu();
//     }
//     else if (
//         menu.classList.contains('menu-on')
//         && event.target.id != 'menu'
//         && event.target.tagName != 'LI') {
//         toggleMenu();
//     }
// });
