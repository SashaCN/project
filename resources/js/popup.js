function setPopup (btnSelector, popupSelector)          // general function for seting popup
{
    let btn = document.querySelectorAll(btnSelector),
        popup = document.querySelector(popupSelector),
        popupBg = popup.closest('.popup-bg');

        btn.forEach(elem => {
            elem.onclick = (e) => {
                if (e.target.closest('a').getAttribute('href') != '#') {
                    location.href = e.target.closest('a').getAttribute('href');
                    return false;
                }

                e.preventDefault();

                popupBg.closest('.popup-bg').classList.toggle('popup__active');
                popup.classList.toggle('popup__active');
            };
        });

        function closePopup (e)
        {
            popup.classList.remove('popup__active');
            popupBg.classList.remove('popup__active');
        }

        popupBg.onclick = (e) => {
            if (e.target == popupBg) {
                closePopup(e);
            }
        };

        popup.querySelector('.popup__close').onclick = (e) => {
            e.preventDefault();

            closePopup(e);
        };
}

setPopup('.profile-link', '.profile-controll__popup');          // login/regiter popup set
