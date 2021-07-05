
ymaps.ready(init);
const from = document.querySelector('#from-where');
const to = document.querySelector('#where-to');
const weight = document.querySelector('#weight');
const temperature = document.querySelector('#temperature');
const danger = document.querySelector('#danger');
const insurance = document.querySelector('#insurance');
const express = document.querySelector('#express');
const btn = document.querySelector('#calc-submit');
const swap = document.querySelector('.btn-swap');
const result = document.querySelector('.total-cost');

swap.addEventListener('click', () => {
    let a = from.value;
    let b = to.value;
    from.value = b;
    to.value = a;
})

function init() {
    var myMap = new ymaps.Map('map', {
            center: [60.906882, 30.067233],
            zoom: 9,
            controls: []
        });
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        if (from.value.length <= 0) {
            return Swal.fire(
                'Ошибка',
                'Не выбран город отправки',
                'error'
            )
        } else if (to.value <= 0) {
            return Swal.fire(
                'Ошибка',
                'Не выбран город доставки',
                'error'
            )
        }

        let a = weight.value.replace(/,/g, '.');
        if (+a<= 0 || +a > 20) {
            return Swal.fire(
                'Ошибка',
                'Вес не может быть меньше 0 и больше 20 тонн',
                'error'
            )
        }
        ymaps.route([
            from.value,
            to.value
        ]).then(function (route) {
            myMap.geoObjects.removeAll();
            myMap.geoObjects.add(route);
            var activeRoute = route;
            if (activeRoute) {
                const length = route.getLength();
                const routeLength = Math.round(length / 1000);
                console.log(Math.round(length / 1000) + ' км');
                calcul(routeLength, weight);
            }
        }, function (error) {
            alert("Возникла ошибка: " + error.message);
        });
    })

}
function calcul (length, tonns) {
    let value = tonns.value.replace(/,/g, '.');
    let weight = +value;
    let price = 0;
    let DELIVERY_TARIFF = 20;
    if (weight < 2 && weight > 0) {
        DELIVERY_TARIFF = 20;
        console.log(`${DELIVERY_TARIFF} руб и вес ${weight}`)
    } else if (weight >= 2 && weight < 3.5) {
        DELIVERY_TARIFF = 26;
        console.log(`${DELIVERY_TARIFF} руб и вес ${weight}`)
    } else if (weight >= 3.5 && weight < 5) {
        DELIVERY_TARIFF = 35;
        console.log(`${DELIVERY_TARIFF} руб и вес ${weight}`)
    } else if (weight >= 5 && weight < 10) {
        DELIVERY_TARIFF = 45;
        console.log(`${DELIVERY_TARIFF} руб и вес ${weight}`)
    } else  if (weight >= 10 && weight < 15) {
        DELIVERY_TARIFF = 60;
        console.log(`${DELIVERY_TARIFF} руб и вес ${weight}`)
    } else if (weight >= 15 && weight <= 20) {
        DELIVERY_TARIFF = 70;
        console.log(`${DELIVERY_TARIFF} руб и вес ${weight}`)
    }

    if (temperature.checked) {
        price += 5000;
    }
    if (danger.checked) {
        price += 8000;
    }
    if (insurance.checked) {
        price += 3000;
    }
    if (express.checked) {
        price += 9000;
    }

    let total = Math.round(((length) * DELIVERY_TARIFF) + price);
    result.innerHTML = total.toLocaleString();

}