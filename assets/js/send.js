const forms = document.querySelectorAll('.form');
const inputs = document.querySelectorAll('.form input')
const resultText = document.querySelectorAll('.form-result');
forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "wp-content/themes/trk-logistics/telegram.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    let confirm = 'Спасибо! Ваша заявка отправлена. Ожидайте звонка.';
                    let error = 'Произошла ошибка при отправке...'
                    if (data === 'Отправлено') {
                        res = confirm;
                        console.log('Confirm')
                        document.querySelectorAll('form').forEach(e =>  console.log(e.reset()));
                        ym(82475893,'reachGoal','send_call');
                        let timerInterval
                        Swal.fire({
                            title: 'Заявка отправлена!',
                            html: 'Спасибо. Ваша заявка на обратный звонок отправлена. Ожидайте в ближайшее время с Вами свяжется менеджер.',
                            timer: 5000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                // console.log('I was closed by the timer')
                            }
                        })
                        // errorText.style.display = 'none';
                    } else {
                        res = error;

                        Swal.fire(
                            'Ошибка',
                            'Произошла ошибка при отправке заявки',
                            'error'
                        )
                    }
                    hideForm(res);

                    setTimeout(showForm, 10000);
                }
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
    })
})
function showForm (data) {
    forms.forEach(item => {
        item.style.display = 'flex';
    })
    resultText.forEach(item => {
        item.style.display = 'none';
    })
}
function hideForm (data) {
    resultText.textContent = data;
    forms.forEach(item => {
        item.style.display = 'none';
    })
    resultText.forEach(item => {
        item.textContent = data;
        item.style.display = 'block';
    })
    // console.log(data);
}

const review = document.querySelector('#review-form');
const submitRev = document.querySelector('#review-sub');
review.addEventListener('submit', e => {
    e.preventDefault();
});

submitRev.addEventListener('click', e => {
    let tk = '';
    grecaptcha.ready(function() {
        grecaptcha.execute('6LdZ53YbAAAAANPFrZ8xi2NU5zdRDfmy-OI0pwq6', {action: 'homepage'}).then(function(token) {
            tk = token;
            document.getElementById('recaptchaResponse').value = token;
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'wp-content/themes/trk-logistics/reviews.php', true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        if (data === 'Данные успешно добавлены в базу.') {
                            let timerInterval
                            Swal.fire({
                                title: 'Отзыв отправлен',
                                html: 'Спасибо. Ваш отзыв очень важен для нас!',
                                timer: 5000,
                                timerProgressBar: true,
                                didOpen: () => {
                                    Swal.showLoading()
                                },
                                willClose: () => {
                                    clearInterval(timerInterval)
                                    review.reset();
                                    const modal = document.querySelector('.modal__container');
                                    modal.classList.remove('show-modal');
                                    document.body.style.overflow = 'auto';
                                    location.reload();
                                }
                            }).then((result) => {
                                /* Read more about handling dismissals below */
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    // console.log('I was closed by the timer')
                                }
                            })
                            // errorText.style.display = 'none';
                        } else {
                            Swal.fire(
                                'Ошибка',
                                'Произошла ошибка при отправке отзыва',
                                'error'
                            )
                        }
                    }
                }
            };
            let formData = new FormData(review);
            xhr.send(formData);
        });
    });


});

function getReviews() {
    const reviewList = document.querySelector('.reviews__list--column')
    let xhr = new XMLHttpRequest();
    xhr.open("GET", 'wp-content/themes/trk-logistics/getReviews.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                reviewList.innerHTML = data;
            }
        }
    }
    xhr.send();
}

getReviews();
const orderForm = document.querySelector('#order-form');
const orderModal = document.querySelector('.order__container');
orderForm.addEventListener('submit', (e) => {
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "wp-content/themes/trk-logistics/order.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                let confirm = 'Спасибо! Ваша заявка отправлена. Ожидайте звонка.';
                let error = 'Произошла ошибка при отправке...'
                if (data === 'Отправлено') {
                    res = confirm;
                    console.log('Confirm')
                        document.querySelectorAll('form').forEach(e =>  console.log(e.reset()));
                        ym(82475893,'reachGoal','email_send');
                    let timerInterval
                    Swal.fire({
                        title: 'Заявка отправлена!',
                        html: 'Спасибо, в ближайшее время с Вами свяжется менеджер.',
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            // console.log('I was closed by the timer')
                        }
                    })
                    // errorText.style.display = 'none';
                } else {
                    res = error;
                    Swal.fire(
                        'Ошибка',
                        'Произошла ошибка при отправке заявки',
                        'error'
                    )
                }

                orderModal.classList.remove('show-modal');
                document.body.style.overflow = 'auto';

                // setTimeout(showForm, 10000);
            }
        }
    }
    let formData = new FormData(orderForm);
    xhr.send(formData);
})