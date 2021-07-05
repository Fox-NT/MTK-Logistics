const header = document.querySelector('.header__wrapper--fixed');
window.addEventListener('scroll', () => {
    const scroll = window.pageYOffset;
    const width = window.innerWidth;
    if (width <= 1132 && width >= 680) {
        if (scroll >= 200) {
            header.style.top = '-95px'
            header.style.padding = '0';
        } else {
            header.style.top = '0'
            header.style.padding = '25px 15px 15px';
        }
    }
})
const burger = document.querySelector('.mobile-burger');
const menu = document.querySelector('.mobile-menu');
const menuItem = document.querySelectorAll('.nav__item');

burger.addEventListener('click', () => {
    menu.classList.toggle('mobile-menu--active');
    document.body.classList.toggle('overflow--block');
    burger.classList.toggle('mobile-burger--active');
});


menuItem.forEach(e => {
    e.addEventListener('click', () => {
        document.body.classList.remove('overflow--block');
        menu.classList.remove('mobile-menu--active');
        burger.classList.remove('mobile-burger--active');
    })
})

const ordermodal = document.querySelector('.order__container');
const order = document.querySelectorAll('.order-btn');
const feed = document.querySelector('.calculator__feedback');

order.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        showModal(ordermodal);
    })
})


feed.addEventListener('click', (e) => {
    e.preventDefault();
    showModal(ordermodal);
})

ordermodal.addEventListener('click', (e) => {
    if (e.target === ordermodal && ordermodal.classList.contains('show-modal')) {
        hideModal(ordermodal);
    }
})

document.addEventListener('keydown', (e) => {
    if (e.code === "Escape" && ordermodal.classList.contains('show-modal')) {
        hideModal(ordermodal);
    }
})


const modal = document.querySelector('.modal__container');
const modalBtn = document.querySelector('.reviews__add');

modalBtn.addEventListener('click', (e) => {
    e.preventDefault();
    showModal(modal);
})

modal.addEventListener('click', (e) => {
    if (e.target === modal && modal.classList.contains('show-modal')) {
        hideModal(modal);
    }
})

document.addEventListener('keydown', (e) => {
    if (e.code === "Escape" && modal.classList.contains('show-modal')) {
        hideModal(modal);
    }
})

function showModal (el) {
    el.classList.add('show-modal');
    document.body.style.overflow = 'hidden';
}

function hideModal (el) {
    el.classList.remove('show-modal');
    document.body.style.overflow = 'auto';
}


function maskPhone(selector, masked = '+7 (___) ___-__-__') {
    const elems = document.querySelectorAll(selector);

    function mask(event) {
        const keyCode = event.keyCode;
        const template = masked,
            def = template.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, "");
        console.log(template);
        let i = 0,
            newValue = template.replace(/[_\d]/g, function (a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
            });
        i = newValue.indexOf("_");
        if (i !== -1) {
            newValue = newValue.slice(0, i);
        }
        let reg = template.substr(0, this.value.length).replace(/_+/g,
            function (a) {
                return "\\d{1," + a.length + "}";
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) {
            this.value = newValue;
        }
        if (event.type === "blur" && this.value.length < 5) {
            this.value = "";
        }

    }

    for (const elem of elems) {
        elem.addEventListener("input", mask);
        elem.addEventListener("focus", mask);
        elem.addEventListener("blur", mask);
    }

}

// use
maskPhone('.phone-mask');
// maskPhone('селектор элементов', 'маска, если маску не передать то будет работать стандартная +7 (___) ___-__-__');