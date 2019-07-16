'use strict';

global.jQuery = require('jquery');
let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  Swiper = require('swiper'),
  imask = require('imask'),
  Typed = require('typed.js');

jQuery(document).ready(function($) {
  // Toggle nav menu
  $('.nav-toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $('.nav').toggleClass('open');
    $('.nav-overlay').toggleClass('is-active');
  });

  $('.nav-overlay').on('click', function (e) {
    e.preventDefault();
    $('.nav-toggle').removeClass('active');
    $('.nav').removeClass('open');
    $('.nav-overlay').removeClass('is-active');
  });

  // Modal
  $('.modal').popup({
    transition: 'all 0.3s',
    onclose: function() {
      $(this).find('.wpcf7-not-valid-tip').remove();
      $(this).find('.wpcf7-response-output').hide();
    }
  });

  new Typed('.hero__typed', {
    stringsElement: '.hero__typed-text',
    loop: true,
    typeSpeed: 50
  });

  let contactForm = function() {
    $('.contact-form').each(function() {
      let submit = $(this).find('[type="submit"]');
      let button = $(this).find('[data-contact-btn] button');

      if (submit.length) {
        button.find('.text').html(submit.val());
        submit.replaceWith(button);
        $(this).find('.ajax-loader').remove();
      }
    });

    // Loader
    $('.contact-form form').on('submit', function () {
      let btn = $(this).find('.btn');

      if (btn.hasClass('btn-link')) {
        btn.addClass("btn-loading");
        btn.find('.text').css('display', 'none');
      } else {
        btn.addClass("btn-loading");
      }
    });

    $('.wpcf7').on('wpcf7spam wpcf7invalid wpcf7mailsent wpcf7mailfailed', function (e) {
      let form = $('.contact-form');
      $(form).find('.btn').removeClass("btn-loading");
    });
  };

  new Swiper('.testimonial-slider', {
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
    breakpoints: {
      992: {
        slidesPerView: 1
      }
    }
  });

  let getServicesName = function() {
    $('.order-services_open').click(function() {
      let name = $(this).data('service-name');
      $('#order-services input[name="services-name"]').val(name);
    });
  };

  // Fixed header
  let fixedHeader = function(e) {
    let header = $('.header');

    if (e.scrollTop() > 150) {
      header.addClass('fixed');
    }
    else {
      header.removeClass('fixed');
    }
  };

  let inputMask = function() {
    let inputMask = $('input[type="tel"]');
    let maskOptions = {
      mask: '+{7} (000) 000-00-00'
    };

    if (inputMask.length) {
      inputMask.each(function(i, el) {
        IMask(el, maskOptions);
      });
    }

  };

  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        let target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();

          let offset = $('.header').outerHeight();
          $('.nav-toggle').removeClass('active');
          $('.nav').removeClass('open');
          $('.nav-overlay').removeClass('is-active');

          $('html, body').animate({
            scrollTop: target.offset().top - offset
          }, 1000);
        }
      }
    });

  contactForm();
  getServicesName();
  fixedHeader($(this));
  inputMask();

  $(window).scroll(function() {
    fixedHeader($(this));
  });

  // SVG
  svg4everybody({});
});