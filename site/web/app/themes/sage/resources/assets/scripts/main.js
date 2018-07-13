// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
// Start of First-page Arrow
jQuery(document).ready(function() {
  var offset = 3800;
  var duration = 1200;
  jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > offset) {
  jQuery('.back-to-top1').fadeIn();
  } else {
  jQuery('.back-to-top1').fadeOut();
  }
  });
  jQuery('.back-to-top1').click(function(event) {
  event.preventDefault();
  jQuery('html, body').animate({scrollTop: 0}, duration);
  return false;
  })
  });
  // End of First page arrow
  // Start of Second-page Arrow
  jQuery(document).ready(function() {
  var offset = 1400;
  var duration = 1200;
  jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > offset) {
  jQuery('.back-to-top2').fadeIn();
  } else {
  jQuery('.back-to-top2').fadeOut();
  }
  });
  jQuery('.back-to-top2').click(function(event) {
  event.preventDefault();
  jQuery('html, body').animate({scrollTop: 0}, duration);
  return false;
  })
  });
  // End of Second page arrow
