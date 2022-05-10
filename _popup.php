<div class="popup">
    <div class="popup__close"></div>
    <form class="popup__form form">
        <div class="form__close">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.707031" y="14.1422" width="1" height="19" transform="rotate(-135 0.707031 14.1422)" fill="#3A241C" />
                <rect y="0.707153" width="1" height="19" transform="rotate(-45 0 0.707153)" fill="#3A241C" />
            </svg>
        </div>
        <h2 class="form__title">
            Запись
        </h2>
        <div class="form__input-container">
            <input class="form__input" name="name" id="name" type="text" required>
            <label class="form__label" for="name">Имя</label>
        </div>
        <div class="form__input-container">
            <input class="form__input" name="phonenumber" id="phonenumber" type="tel" required>
            <label class="form__label" for="phonenumber">Номер телефона</label>
        </div>
        <div class="form__input-container">
            <input class="form__input" name="dateTime" id="dateTime" type="text" required>
            <label class="form__label" for="dateTime">Дата и время</label>
        </div>
        <div class="form__submit" onclick="send()">Записаться</div>
    </form>
</div>