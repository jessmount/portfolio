<?php /* Template Name: Contact Page Template */ get_header(); ?>

<div class="contact-page">

    <div class="contact-page__form">
        <form action="#" class="form">
            <div class="form__group">
                <input type="text" class="form__input" id="first_name" placeholder="First Name">
                <label for="first_name" class="form__label">First Name</label>
            </div>
            <div class="form__group">
                <input type="text" class="form__input" id="last_name" placeholder="Last Name">
                <label for="last_name" class="form__label">Last Name</label>
            </div>
            <div class="form__group">
                <input type="email" class="form__input" id="email" placeholder="Email">
                <label for="email" class="form__label">Email</label>
            </div>
            <div class="form__group">
                <textarea class="form__input" id="inquiry" placeholder="Details"></textarea>
                <label for="inquiry" class="form__label">Details</label>
            </div>
            <button class="form__btn">send</button>
        </form>
    </div>

    <div class="contact-page__details">
        <div class="contact-page__email">
            <div class="contact-page__background">email</div>
            <div class="contact-page__detail-info"></div>
        </div>
        <div class="contact-page__social">
            <div class="contact-page__background">social</div>
            <div class="contact-page__detail-info"></div>
        </div>
    </div>

</div>


<?php get_footer(); ?>