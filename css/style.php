<style>

* {
  box-sizing: border-box;
  scrollbar-width: thin;
  scrollbar-color: #f2f3e9;
}

/* Works on Chrome, Edge, and Safari */
*::-webkit-scrollbar {
  width: 12px;
}

*::-webkit-scrollbar-track {
  background: #2b2d31;
}

*::-webkit-scrollbar-thumb {
  background-color: #f2f3e9;
  border-radius: 20px;
  border: 2px solid #b5bac1;
}
body {
  margin: 0;
  font-family: sans-serif;
  color: #000;
  position: relative;
  padding-bottom: 3em;
  min-height: 100vh;
  background: #313338 !important;
}

footer{ 
  padding: 1em 0;
  position: absolute;
  bottom: 0;
  width: 100%;
  background-color: #2b2d31;
}


 button,
input {
    font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
}

h4 {
    font-weight: 400;
}

.burgerbutton {
  cursor: pointer;
  color: white;
}














.items-list {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  width:250px;
  border-radius: 3px;
  position: absolute;
  
  background: #313338;
  padding: .5rem 0;
  top: 3.5rem;
  right: 0px;
  list-style: none;
  display: none;
  z-index: 99;
  color: #5865f2;
}

.items-list > .item {
  display: flex;
  box-sizing: border-box;
  justify-content: space-between;
  padding: 1rem;
  color: #5865f2;
}

.items-list > .item:hover {
  background: #2b2d31;
  color: #efe4e4;
  text-decoration:none;
  cursor: pointer;
}
.items-list > .active {
  background: #5865f2;
  color: #efe4e4;
  text-decoration:none;
  cursor: pointer;
}
.items-list > .active:hover {
  background: #2b2d31;
  color: #5865f2;
  text-decoration:none;
  cursor: pointer;
}

.items-list > .item:hover > .iconitem {
  color: #efe4e4;
  text-decoration:none;
}
.items-list > .active:hover > .iconitem {
  color: #5865f2;
  text-decoration:none;
}

.items-list.open {
  display: block;
}

.items-list::after {
  content: '';
  position: absolute;
  right: 15px;
  top: -10px;
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #313338;
  clear: both;
}



.admin-list {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  width:250px;
  border-radius: 3px;
  position: absolute;
  
  background: #313338;
  padding: .5rem 0;
  top: 3.5rem;
  right: 0px;
  list-style: none;
  display: none;
  z-index: 99;
  color: #5865f2;
}

.admin-list > .item {
  display: flex;
  box-sizing: border-box;
  justify-content: space-between;
  padding: 1rem;
  color: #5865f2;
}

.admin-list > .item:hover {
  background: #2b2d31;
  color: #efe4e4;
  text-decoration:none;
  cursor: pointer;
}
.admin-list > .active {
  background: #5865f2;
  color: #efe4e4;
  text-decoration:none;
  cursor: pointer;
}
.admin-list > .active:hover {
  background: #2b2d31;
  color: #5865f2;
  text-decoration:none;
  cursor: pointer;
}

.admin-list > .item:hover > .iconitem {
  color: #efe4e4;
  text-decoration:none;
}
.admin-list > .active:hover > .iconitem {
  color: #5865f2;
  text-decoration:none;
}

.admin-list.open {
  display: block;
}

.admin-list::after {
  content: '';
  position: absolute;
  right: 15px;
  top: -10px;
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #313338;
  clear: both;
}




h4,
.h4 {
    font-size: 1.5em;
    line-height: 1.45em;
	
    margin-top: 30px;
    margin-bottom: 15px;
}

p {
    line-height: 1.61em;
    font-weight: 300;
    font-size: 1.2em;
}


.nav-item .nav-link:not(.item),
.navbar {
    -webkit-transition: all 300ms ease 0s;
    -moz-transition: all 300ms ease 0s;
    -o-transition: all 300ms ease 0s;
    -ms-transition: all 300ms ease 0s;
    transition: all 300ms ease 0s;
}

[data-toggle="collapse"][data-parent="#accordion"] i {
    -webkit-transition: transform 150ms ease 0s;
    -moz-transition: transform 150ms ease 0s;
    -o-transition: transform 150ms ease 0s;
    -ms-transition: all 150ms ease 0s;
    transition: transform 150ms ease 0s;
}

#button-container {
  display: inline-block;
  width: 100%;
}
#button-container .container {
  max-width: 900px;
  margin: 0 auto;
  position: relative;
  display: block;
  float: left;
  width: 100%;
  left: 50%;
  transform: translateX(-50%);
  color: white;
}
#button-container .button {
  margin: 20px;
  float: left;
  position: relative;
  font-family: arial;
  text-transform: uppercase;
  color: white;
  cursor: pointer;
}
#button-container .button .label {
  padding: 10px;
  display: inline-block;
}
#button-container:hover {
  color: white;
}

#button-container .button.v17:hover .icon:before, #button-container .button.v17:hover .icon:after {
  width: 100%;
}
#button-container .button.v17:hover .icon span:before, #button-container .button.v17:hover .icon span:after {
  height: 100%;
}
#button-container .button.v17:hover .icon2 {
  transform: skew(-40deg, 0deg) scale(1);
  z-index: -1;
}
#button-container .button.v17 .label {
  padding: 10px 22px;
}
#button-container .button.v17 .icon2 {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skew(-40deg, 0deg) scaleX(0.2) scaleY(0.5);
  transition: all 0.2s;
  transition-delay: 0.2s;
}
#button-container .button.v17 .icon {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skew(-40deg, 0deg);
  transition: all 0.2s;
}
#button-container .button.v17 .icon:before, #button-container .button.v17 .icon:after {
  content: "";
  height: 1px;
  width: 30px;
  position: absolute;
  display: block;
  background: #347b9c;
  transition: all 0.2s;
  transition-delay: 0.2s;
}
#button-container .button.v17 .icon:before {
  left: 0;
  top: 0;
}
#button-container .button.v17 .icon:after {
  right: 0;
  bottom: 0;
}
#button-container .button.v17 .icon span:before, #button-container .button.v17 .icon span:after {
  content: "";
  background: #347b9c;
  position: absolute;
  display: block;
  width: 2px;
  height: 30px;
  transition: all 0.2s;
  transition-delay: 0.2s;
}
#button-container .button.v17 .icon span:before {
  left: 0;
  top: 0;
}
#button-container .button.v17 .icon span:after {
  right: 0;
  bottom: 0;
}



#button-container .button.v199:hover .icon:before, #button-container .button.v199:hover .icon:after {
  width: 100%;
}
#button-container .button.v199:hover .icon span:before, #button-container .button.v199:hover .icon span:after {
  height: 100%;
}
#button-container .button.v199 .icon2 {
  transform: skew(-40deg, 0deg) scale(1);
  z-index: -1;
}
#button-container .button.v199 .label {
  padding: 10px 22px;
}
#button-container .button.v199 .icon2 {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skew(-40deg, 0deg) scaleX(0.2) scaleY(0.5);
  transition: all 0.2s;
  transition-delay: 0.2s;
}
#button-container .button.v199 .icon {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skew(-40deg, 0deg);
  transition: all 0.2s;
}
#button-container .button.v199 .icon:before, #button-container .button.v199 .icon:after {
  content: "";
  height: 1px;
  width: 30px;
  position: absolute;
  display: block;
  background: #379c34;
  transition: all 0.2s;
  transition-delay: 0.2s;
}
#button-container .button.v199 .icon:before {
  left: 0;
  top: 0;
}
#button-container .button.v199 .icon:after {
  right: 0;
  bottom: 0;
}
#button-container .button.v199 .icon span:before, #button-container .button.v199 .icon span:after {
  content: "";
  background: #379c34;
  position: absolute;
  display: block;
  width: 2px;
  height: 30px;
  transition: all 0.2s;
  transition-delay: 0.2s;
}
#button-container .button.v199 .icon span:before {
  left: 0;
  top: 0;
}
#button-container .button.v199 .icon span:after {
  right: 0;
  bottom: 0;
}

#button-container .button.v198:hover .icon {
  transform: scale(0.9) skew(0deg, 0deg);
  color: white;
}
#button-container .button.v198:hover .icon:before, #button-container .button.v198:hover .icon:after {
  width: 60px;
  transition-delay: 0.4s;
  color: white;
}
#button-container .button.v198:hover .icon:before {
  left: calc(50% - 30px);
  color: white;
}
#button-container .button.v198:hover .icon:after {
  right: calc(50% - 30px);
  color: white;
}
#button-container .button.v198:hover .icon span:before, #button-container .button.v198:hover .icon span:after {
  height: 0;
  transition-delay: 0s;
  color: white;
}
#button-container .button.v198:hover .icon2 {
  transform: skew(-40deg, 0deg) scaleX(1);
  background: #379c34;
  z-index: -1;
  transition-delay: 0.5s;
  color: white;
}
#button-container .button.v198 .label {
  padding: 10px 22px;
  color: #1ade14;
}
#button-container .button.v198 .icon2 {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skew(-40deg, 0deg) scaleX(0.2);
  transition: all 0.2s;
}
#button-container .button.v198 .icon {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skew(-40deg, 0deg);
  transition: all 0.2s;
}
#button-container .button.v198 .icon:before, #button-container .button.v198 .icon:after {
  content: "";
  height: 1px;
  width: 30px;
  position: absolute;
  display: block;
  background: #379c34;
  transition: all 0.2s;
  transition-delay: 0s;
}
#button-container .button.v198 .icon:before {
  left: 0;
  top: 0;
}
#button-container .button.v198 .icon:after {
  right: 0;
  bottom: 0;
}
#button-container .button.v198 .icon span:before, #button-container .button.v198 .icon span:after {
  content: "";
  background: #379c34;
  position: absolute;
  display: block;
  width: 2px;
  height: 30px;
  transition: all 0.2s;
  transition-delay: 0.4s;
}
#button-container .button.v198 .icon span:before {
  left: 0;
  top: 0;
}
#button-container .button.v198 .icon span:after {
  right: 0;
  bottom: 0;
}
#button-container .button.v18:hover .icon {
  transform: scale(0.9) skew(0deg, 0deg);
}
#button-container .button.v18:hover .icon:before, #button-container .button.v18:hover .icon:after {
  width: 60px;
  transition-delay: 0.4s;
}
#button-container .button.v18:hover .icon:before {
  left: calc(50% - 30px);
}
#button-container .button.v18:hover .icon:after {
  right: calc(50% - 30px);
}
#button-container .button.v18:hover .icon span:before, #button-container .button.v18:hover .icon span:after {
  height: 0;
  transition-delay: 0s;
}
#button-container .button.v18:hover .icon2 {
  transform: skew(-40deg, 0deg) scaleX(1);
  background: #347b9c;
  z-index: -1;
  transition-delay: 0.5s;
}
#button-container .button.v18 .label {
  padding: 10px 22px;
  color: #11a5e7;
}
#button-container .button.v18 .icon2 {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skew(-40deg, 0deg) scaleX(0.2);
  transition: all 0.2s;
}
#button-container .button.v18 .icon {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transform: skew(-40deg, 0deg);
  transition: all 0.2s;
}
#button-container .button.v18 .icon:before, #button-container .button.v18 .icon:after {
  content: "";
  height: 1px;
  width: 30px;
  position: absolute;
  display: block;
  background: #347b9c;
  transition: all 0.2s;
  transition-delay: 0s;
}
#button-container .button.v18 .icon:before {
  left: 0;
  top: 0;
}
#button-container .button.v18 .icon:after {
  right: 0;
  bottom: 0;
}
#button-container .button.v18 .icon span:before, #button-container .button.v18 .icon span:after {
  content: "";
  background: #347b9c;
  position: absolute;
  display: block;
  width: 2px;
  height: 30px;
  transition: all 0.2s;
  transition-delay: 0.4s;
}
#button-container .button.v18 .icon span:before {
  left: 0;
  top: 0;
}
#button-container .button.v18 .icon span:after {
  right: 0;
  bottom: 0;
}

[data-toggle="collapse"][data-parent="#accordion"][aria-expanded="true"] i {
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

@font-face {
    font-family: 'Nucleo Outline';
  src: url("../fonts/nucleo-outline.eot");
  src: url("../fonts/nucleo-outline.eot") format("embedded-opentype"), url("../fonts/nucleo-outline.woff2") format("woff2"), url("../fonts/nucleo-outline.woff") format("woff"), url("../fonts/nucleo-outline.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;
}

.now-ui-icons {
    display: inline-block;
    font: normal normal normal 14px/1 'Nucleo Outline';
    font-size: inherit;
    speak: none;
    text-transform: none;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

@-webkit-keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
    }
}

@-moz-keyframes nc-icon-spin {
    0% {
        -moz-transform: rotate(0deg);
    }

    100% {
        -moz-transform: rotate(360deg);
    }
}

@keyframes nc-icon-spin {
    0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }

    100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}

.now-ui-icons.objects_globe:before {
    content: "\ea2f";
}

.now-ui-icons.ui-1_settings-gear-63:before {
    content: "\ea4e";
}

.now-ui-icons.users_circle-08:before {
    content: "\ea23";
}
.now-ui-icons.objects_key-25:before {
    content: "\ea38";
}
.now-ui-icons.tests:before {
    content: "\ea60";
}
.now-ui-icons.sport_user-run:before {
    content: "\ea35";
}
.now-ui-icons.ui-1_lock-circle-open:before {
    content: "\ea35";
}
.now-ui-icons.shopping_credit-card:before {
    content: "\ea28";
}
.now-ui-icons.sport_trophy:before {
    content: "\ea5d";
}
.now-ui-icons.shopping_tag-content:before {
    content: "\ea59";
}
.now-ui-icons.shopping_shop:before {
    content: "\ea50";
}
.now-ui-icons.media-1_button-power:before {
    content: "\ea19";
}
.now-ui-icons.health_ambulance:before {
    content: "\ea07";
}
.now-ui-icons.business_money-coins:before {
    content: "\ea40";
}
.now-ui-icons.business_badge:before {
    content: "\ea09";
}

.navbar {
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
    min-height: 53px;
    margin-bottom: 20px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.15);
}

.navbar a {
    vertical-align: middle;
}

.navbar a:not(.btn):not(.item) {
    color: #FFFFFF;
}

.navbar p {
    display: inline-block;
    margin: 0;
    line-height: 21px;
    font-weight: inherit;
    font-size: inherit;
}

.navbar .navbar-nav .nav-link:not(.btn):not(.item) {
    text-transform: uppercase;
    font-size: 0.7142em;
    padding: 0.5rem 0.7rem;
    line-height: 1.625rem;
}

.navbar .navbar-nav .nav-link:not(.btn):not(.item) i.fab+p,
.navbar .navbar-nav .nav-link:not(.btn):not(.item) i.now-ui-icons+p {
    margin-left: 3px;
}

.navbar .navbar-nav .nav-link:not(.btn):not(.item) i.fab,
.navbar .navbar-nav .nav-link:not(.btn):not(.item) i.now-ui-icons {
    font-size: 18px;
    position: relative;
    top: 3px;
    text-align: center;
    width: 21px;
}

.navbar .navbar-nav .nav-link:not(.btn):not(.item) i.now-ui-icons {
    top: 4px;
    font-size: 16px;
}

.navbar .navbar-nav .nav-item.active .nav-link:not(.btn):not(.item),
.navbar .navbar-nav .nav-item .nav-link:not(.btn):not(.item):focus,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):not(.item):hover,
.navbar .navbar-nav .nav-item .nav-link:not(.btn):not(.item):active {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 0.1875rem;
}

.navbar .navbar-brand {
    text-transform: uppercase;
    font-size: 0.8571em;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 1.625rem;
}

.navbar .navbar-toggler {
    width: 37px;
    height: 27px;
    outline: 0;
    cursor: pointer;
}

.navbar.navbar-transparent {
     background-color: #2b2d31 !important;
    box-shadow: none;
    color: #FFFFFF;
    padding-top: 20px !important;
}

.bg-solmed {
     background-color: #2b2d31 !important;
}
.bg-primary {
    background-color: #f96332 !important;
}

.bg-info {
    background-color: #2CA8FF !important;
}

.bg-success {
    background-color: #18ce0f !important;
}

.bg-danger {
    background-color: #FF3636 !important;
}

.bg-warning {
    background-color: #FFB236 !important;
}

img {
    max-width: 100%;
    border-radius: 1px;
}

.login-page .link {
    font-size: 10px;
    color: #FFFFFF;
    text-decoration: none;
}


[data-background-color="orange"] {
    background-color: #e95e38;
}

[data-background-color="black"] {
    background-color: #2c2c2c;
}

[data-background-color]:not([data-background-color="gray"]) {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) p {
    color: #FFFFFF;
}

[data-background-color]:not([data-background-color="gray"]) h4,
[data-background-color]:not([data-background-color="gray"]) a:not(.btn):not(.dropdown-item) {
    color: #FFFFFF;
}

@media screen and (max-width: 991px) {
    .sidebar-collapse .navbar-collapse {
        position: fixed;
        display: block;
        top: 0;
        height: 100% !important;
        width: 300px;
        right: 0;
        z-index: 1032;
        visibility: visible;
        background-color: #999;
        overflow-y: visible;
        border-top: none;
        text-align: left;
        max-height: none !important;
        -webkit-transform: translate3d(300px, 0, 0);
        -moz-transform: translate3d(300px, 0, 0);
        -o-transform: translate3d(300px, 0, 0);
        -ms-transform: translate3d(300px, 0, 0);
        transform: translate3d(300px, 0, 0);
        -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    }

    .sidebar-collapse .navbar-collapse:before {
        background: #f96332;
        background: -webkit-linear-gradient(#f96332 0%, #000 80%);
        background: -o-linear-gradient(#f96332 0%, #000 80%);
        background: -moz-linear-gradient(#f96332 0%, #000 80%);
        background: linear-gradient(#f96332 0%, #000 80%);
        opacity: 0.76;
        filter: alpha(opacity=76);
        display: block;
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
    }

    .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link {
        margin: 0 1rem;
        margin-top: 0.3125rem;
    }

    .sidebar-collapse .navbar-collapse .navbar-nav:not(.navbar-logo) .nav-link:not(.btn):not(.item) {
        color: #FFFFFF !important;
    }

    .sidebar-collapse .navbar .navbar-nav {
        margin-top: 53px;
        position: relative;
        max-height: calc(100vh - 75px);
        min-height: 100%;
        overflow: auto;
    }

    .sidebar-collapse .navbar .navbar-translate {
        width: 100%;
        position: relative;
        display: flex;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important;
        -ms-flex-align: center;
        align-items: center;
        -webkit-transform: translate3d(0px, 0, 0);
        -moz-transform: translate3d(0px, 0, 0);
        -o-transform: translate3d(0px, 0, 0);
        -ms-transform: translate3d(0px, 0, 0);
        transform: translate3d(0px, 0, 0);
        -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -moz-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -o-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        -ms-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
        transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    }

    .sidebar-collapse .navbar .navbar-toggler-bar {
        display: block;
        position: relative;
        width: 22px;
        height: 1px;
        border-radius: 1px;
        background: #FFFFFF;
    }

    .sidebar-collapse .navbar .navbar-toggler-bar+.navbar-toggler-bar {
        margin-top: 7px;
    }

    .sidebar-collapse .navbar .navbar-toggler-bar.bar2 {
        width: 17px;
        transition: width .2s linear;
    }

    .sidebar-collapse [class*="navbar-expand-"] .navbar-collapse {
        width: 300px;
    }

    .navbar-nav .nav-link:not(.item) i.fab,
  .navbar-nav .nav-link i.now-ui-icons {
        opacity: .5;
    }

    .navbar-nav .nav-link i.now-ui-icons {
        opacity: .5;
    }
}

@media screen and (min-width: 992px) {
    .navbar-collapse:not(.has-image) {
        background: transparent !important;
    }

    .navbar-nav .nav-item:not(:last-child) {
        margin-right: 5px;
    }
}

@media screen and (max-width: 576px) {
    .navbar[class*='navbar-expand-'] .container {
        margin-left: 0;
        margin-right: 0;
    }
}

.navigation-example {
    background-position: center center;
    background-size: cover;
    margin-top: 0;
    min-height: 50%;
    height: 100%;
}

.section-navbars {
    padding-top: 0;
}

#navbar .navbar {
    margin-bottom: 20px;
}

#navbar .navbar-toggler {
    pointer-events: none;
}




@font-face {
  font-family: 'Nucleo Outline';
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot");
  src: url("https://github.com/creativetimofficial/now-ui-kit/blob/master/assets/fonts/nucleo-outline.eot") format("embedded-opentype");
  src: url("https://raw.githack.com/creativetimofficial/now-ui-kit/master/assets/fonts/nucleo-outline.woff2");
  font-weight: normal;
  font-style: normal;
        
}

.now-ui-icons {
  display: inline-block;
  font: normal normal normal 14px/1 'Nucleo Outline';
  font-size: inherit;
  speak: none;
  text-transform: none;
  /* Better Font Rendering */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

@media screen and (max-width: 991px) {
    .section-navbars .navbar-collapse {
        display: none !important;
    }
}

			.container .top-buffer-1 { margin-top:5%; }
			.top-buffer { margin-top:2px; }
			fieldset.scheduler-border {
				border: 1px groove #ddd !important;
				padding: 0 1.4em 1.4em 1.4em !important;
				margin: 0 0 1.5em 0 !important;
				-webkit-box-shadow:  0px 0px 0px 0px #000;
						box-shadow:  0px 0px 0px 0px #000;
			}

				legend.scheduler-border {
					font-size: 1.2em !important;
					font-weight: bold !important;
					text-align: left !important;
					width:auto;
					padding:0 1px;
					border-bottom:none;
				}
			.login-wrapper {
				width: 100%;
				height: 100%;
				position: absolute;
				display: table;
				z-index: 2;
			}
			.note
			{
				text-align: center;
				height: 80px;
				background: -webkit-linear-gradient(left, #0072ff, #8811c5);
				color: #fff;
				font-weight: bold;
				line-height: 80px;
			}
			.note p{ font-size:30px; }
			.form-content
			{
				padding: 5%;
				border: 1px solid #ced4da;
				margin-bottom: 2%;
			}
			.form-control{
				border-radius:1.5rem;
			}
			.bk {
				padding: .5em;
				background-color: #2b2d31;
				border: 2px solid #2b2d31;
				border-radius: 15px;
			}
			.bk .bg-bk {
				padding: .5em;
				background-color: #2b2d31;
				border: 2px solid #2b2d31;
				border-radius: 15px;
				color: white;
			}
			
			tr:hover {
				
				background-color: #313338;
				color: #5865f2;
			}
			
			tr:nth-child(odd) {
				background-color: #2b2d31;
				color: #5865f2;
		    }
		    tr:nth-child(even) {
				background-color: #313338;
				color: #5865f2;
		    }
			@media print {

				  #section-to-print, #section-to-print * {
					visibility: hidden;
				  }
				  #section-to-print {
					position: absolute;
					left: 0;
					top: 0;
				  }
			   .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
					float: left;
			   }
			   .col-sm-12 {
					width: 100%;
			   }
			   .col-sm-11 {
					width: 91.66666667%;
			   }
			   .col-sm-10 {
					width: 83.33333333%;
			   }
			   .col-sm-9 {
					width: 75%;
			   }
			   .col-sm-8 {
					width: 66.66666667%;
			   }
			   .col-sm-7 {
					width: 58.33333333%;
			   }
			   .col-sm-6 {
					width: 50%;
			   }
			   .col-sm-5 {
					width: 41.66666667%;
			   }
			   .col-sm-4 {
					width: 33.33333333%;
			   }
			   .col-sm-3 {
					width: 25%;
			   }
			   .col-sm-2 {
					width: 16.66666667%;
			   }
			   .col-sm-1 {
					width: 8.33333333%;
			   }
			}
	.panel-box {
    display: table;
    table-layout: fixed;
    width: 100%;
    height: 100%;
    text-align: center;
    border: medium none;
}
	
.panel-box .panel-icon {
    display: table-cell;
    padding: 29px;
    width: 1%;
    vertical-align: top;
    border-radius: 0px;
    text-align: center;
	border-bottom: 1px solid #fcfcfc;
	border-top: 1px solid #fcfcfc;
	border-right: 1px solid #fcfcfc;
}
	
	.dashboard-stats .stat-icon {
    line-height: 65px;
}
	

	.bg-success {
    background-color: #A3C86D !important;
    color: #FFF !important;
}
	
	.success-text {
    color: #82b33a;
}
	
	.bg-danger {
    background-color: #FF7857 !important;
    color: #FFF !important;
}
	
	.danger-text {
    color: #d15b3d;
}
	
	
	.bg-lovender {
    background-color: #8075C4 !important;
    color: #FFF !important;
}
	
	
	.lovender-text {
    color: #6a5fb1;
}
	
	

	.bg-info {
    background-color: #7ACBEE !important;
    color: #FFF !important;
}
	
	.info-text {
    color: #3ca0cb;
}
	
	
	
	
	.size-h1 {
    font-size: 20px;
}
	
	.panel-icon p.text {
    font-weight: bold;
    font-size: 14px;
    text-align: center;
}
	
	
	
    .panel-icon i {
    text-align: center;
}
	
	
    .panel-icon i {
    text-align: center;
}
	
	
    .text-large {
    font-size: 50px;
}


    .text-large {
    font-size: 50px;
}
:root {
    --blue: #5e72e4;
    --indigo: #5603ad;
    --purple: #8965e0;
    --pink: #f3a4b5;
    --red: #f5365c;
    --orange: #fb6340;
    --yellow: #ffd600;
    --green: #2dce89;
    --teal: #11cdef;
    --cyan: #2bffc6;
    --white: #fff;
    --gray: #8898aa;
    --gray-dark: #32325d;
    --light: #ced4da;
    --lighter: #e9ecef;
    --primary: #5e72e4;
    --secondary: #f7fafc;
    --success: #2dce89;
    --info: #11cdef;
    --warning: #fb6340;
    --danger: #f5365c;
    --light: #adb5bd;
    --dark: #212529;
    --default: #172b4d;
    --white: #fff;
    --neutral: #fff;
    --darker: black;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: Open Sans, sans-serif;
    --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
}



[tabindex='-1']:focus {
    outline: 0 !important;
}

h2,
h3 {
    margin-top: 0;
    margin-bottom: .5rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

ul {
    margin-top: 0;
    margin-bottom: 1rem;
}

ul ul {
    margin-bottom: 0;
}

dfn {
    font-style: italic;
}

strong {
    font-weight: bolder;
}

a {
    text-decoration: none;
    color: #5e72e4;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

a:hover {
    text-decoration: none;
    color: #233dd2;
}

a:not([href]):not([tabindex]) {
    text-decoration: none;
    color: inherit;
}

a:not([href]):not([tabindex]):hover,
a:not([href]):not([tabindex]):focus {
    text-decoration: none;
    color: inherit;
}

a:not([href]):not([tabindex]):focus {
    outline: 0;
}

img {
    vertical-align: middle;
    border-style: none;
}

table {
    border-collapse: collapse;
}

caption {
    padding-top: 1rem;
    padding-bottom: 1rem;
    caption-side: bottom;
    text-align: left;
    color: #8898aa;
}

th {
    text-align: inherit;
}

button {
    border-radius: 0;
}

button:focus {
    outline: 1px dotted;
    outline: 5px auto -webkit-focus-ring-color;
}

input,
button {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    margin: 0;
}

button,
input {
    overflow: visible;
}

button {
    text-transform: none;
}

button,
[type='reset'],
[type='submit'] {
    -webkit-appearance: button;
}

button::-moz-focus-inner,
[type='button']::-moz-focus-inner,
[type='reset']::-moz-focus-inner,
[type='submit']::-moz-focus-inner {
    padding: 0;
    border-style: none;
}

input[type='radio'],
input[type='checkbox'] {
    box-sizing: border-box;
    padding: 0;
}

input[type='date'],
input[type='time'],
input[type='datetime-local'],
input[type='month'] {
    -webkit-appearance: listbox;
}

legend {
    font-size: 1.5rem;
    line-height: inherit;
    display: block;
    width: 100%;
    max-width: 100%;
    margin-bottom: .5rem;
    padding: 0;
    white-space: normal;
    color: inherit;
}

progress {
    vertical-align: baseline;
}

[type='number']::-webkit-inner-spin-button,
[type='number']::-webkit-outer-spin-button {
    height: auto;
}

[type='search'] {
    outline-offset: -2px;
    -webkit-appearance: none;
}

[type='search']::-webkit-search-cancel-button,
[type='search']::-webkit-search-decoration {
    -webkit-appearance: none;
}

::-webkit-file-upload-button {
    font: inherit;
    -webkit-appearance: button;
}

[hidden] {
    display: none !important;
}

h2,
h3,
.h2,
.h3 {
    font-family: inherit;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: .5rem;
    color: #32325d;
}

h2,
.h2 {
    font-size: 1.25rem;
}

h3,
.h3 {
    font-size: 1.0625rem;
}

.container {
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}

@media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
}

.row {
    display: flex;
    margin-right: -15px;
    margin-left: -15px;
    flex-wrap: wrap;
}

.col,
.col-xl-6 {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col {
    max-width: 100%;
    flex-basis: 0;
    flex-grow: 1;
}

@media (min-width: 1200px) {

    .col-xl-6 {
        max-width: 50%;
        flex: 0 0 50%;
    }
}

.table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}

.table th,
.table td {
    padding: 1rem;
    vertical-align: top;
    border-top: 1px solid #e9ecef;
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e9ecef;
}

.table tbody + tbody {
    border-top: 2px solid #e9ecef;
}

.table .table {
    background-color: #f8f9fe;
}

.table-dark,
.table-dark > th,
.table-dark > td {
    background-color: #c1c2c3;
}

.table .thead-dark th {
    color: #f8f9fe;
    border-color: #1f3a68;
    background-color: #172b4d;
}

.table .thead-light th {
    color: #8898aa;
    border-color: #e9ecef;
    background-color: #f6f9fc;
}

.table-dark {
    color: #f8f9fe;
    background-color: #172b4d;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
    border-color: #1f3a68;
}

.table-responsive {
    display: block;
    overflow-x: auto;
    width: 100%;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}

.btn {
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    display: inline-block;
    padding: .625rem 1.25rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
    border: 1px solid transparent;
    border-radius: .375rem;
}

@media screen and (prefers-reduced-motion: reduce) {
    .btn {
        transition: none;
    }
}

.btn:hover,
.btn:focus {
    text-decoration: none;
}

.btn:focus {
    outline: 0;
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.btn.disabled,
.btn:disabled {
    opacity: .65;
    box-shadow: none;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.btn:not(:disabled):not(.disabled):active,
.btn:not(:disabled):not(.disabled).active {
    box-shadow: none;
}

.btn:not(:disabled):not(.disabled):active:focus,
.btn:not(:disabled):not(.disabled).active:focus {
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
}

a.btn.disabled {
    pointer-events: none;
}

.btn-sm {
    font-size: .875rem;
    line-height: 1.5;
    padding: .25rem .5rem;
    border-radius: .375rem;
}

.nav {
    display: flex;
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
    flex-wrap: wrap;
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    border: 1px solid rgba(0, 0, 0, .05);
    border-radius: .375rem;
    background-color: #fff;
    background-clip: border-box;
}

.card-header {
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}

.card-header:first-child {
    border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
}

.card-footer {
    padding: 1.25rem 1.5rem;
    border-top: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}

.card-footer:last-child {
    border-radius: 0 0 calc(.375rem - 1px) calc(.375rem - 1px);
}

.pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .375rem;
}

.page-link {
    line-height: 1.25;
    position: relative;
    display: block;
    margin-left: -1px;
    padding: .5rem .75rem;
    color: #8898aa;
    border: 1px solid #dee2e6;
    background-color: #fff;
}

.page-link:hover {
    z-index: 2;
    text-decoration: none;
    color: #8898aa;
    border-color: #dee2e6;
    background-color: #dee2e6;
}

.page-link:focus {
    z-index: 2;
    outline: 0;
    box-shadow: none;
}

.page-link:not(:disabled):not(.disabled) {
    cursor: pointer;
}

.page-item:first-child .page-link {
    margin-left: 0;
    border-top-left-radius: .375rem;
    border-bottom-left-radius: .375rem;
}

.page-item:last-child .page-link {
    border-top-right-radius: .375rem;
    border-bottom-right-radius: .375rem;
}

.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    border-color: #5e72e4;
    background-color: #5e72e4;
}

.page-item.disabled .page-link {
    cursor: auto;
    pointer-events: none;
    color: #8898aa;
    border-color: #dee2e6;
    background-color: #fff;
}

.badge {
    font-size: 66%;
    font-weight: 600;
    line-height: 1;
    display: inline-block;
    padding: .35rem .375rem;
    text-align: center;
    vertical-align: baseline;
    white-space: nowrap;
    border-radius: .375rem;
}

.badge:empty {
    display: none;
}

.btn .badge {
    position: relative;
    top: -1px;
}

@keyframes progress-bar-stripes {
    from {
        background-position: 1rem 0;
    }

    to {
        background-position: 0 0;
    }
}

.progress {
    font-size: .75rem;
    display: flex;
    overflow: hidden;
    height: 1rem;
    border-radius: .375rem;
    background-color: #e9ecef;
    box-shadow: inset 0 .1rem .1rem rgba(0, 0, 0, .1);
}

.progress-bar {
    display: flex;
    flex-direction: column;
    transition: width .6s ease;
    text-align: center;
    white-space: nowrap;
    color: #fff;
    background-color: #5e72e4;
    justify-content: center;
}

@media screen and (prefers-reduced-motion: reduce) {
    .progress-bar {
        transition: none;
    }
}

.media {
    display: flex;
    align-items: flex-start;
}

.media-body {
    flex: 1 1;
}

.tooltip {
    font-family: Open Sans, sans-serif;
    font-size: .875rem;
    font-weight: 400;
    font-style: normal;
    line-height: 1.5;
    position: absolute;
    z-index: 1070;
    display: block;
    margin: 0;
    text-align: left;
    text-align: start;
    white-space: normal;
    text-decoration: none;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    word-wrap: break-word;
    word-break: normal;
    opacity: 0;
    text-shadow: none;
    line-break: auto;
}

.tooltip.show
{
    opacity: .9;
}
.tooltip .arrow
{
    position: absolute;

    display: block;

    width: .8rem;
    height: .4rem;
}
.tooltip .arrow::before
{
    position: absolute;

    content: '';

    border-style: solid;
    border-color: transparent;
}

.bs-tooltip-top,
.bs-tooltip-auto[x-placement^='top']
{
    padding: .4rem 0;
}
.bs-tooltip-top .arrow,
.bs-tooltip-auto[x-placement^='top'] .arrow
{
    bottom: 0;
}
.bs-tooltip-top .arrow::before,
.bs-tooltip-auto[x-placement^='top'] .arrow::before
{
    top: 0;

    border-width: .4rem .4rem 0;
    border-top-color: #000;
}

.bs-tooltip-right,
.bs-tooltip-auto[x-placement^='right']
{
    padding: 0 .4rem;
}
.bs-tooltip-right .arrow,
.bs-tooltip-auto[x-placement^='right'] .arrow
{
    left: 0;

    width: .4rem;
    height: .8rem;
}
.bs-tooltip-right .arrow::before,
.bs-tooltip-auto[x-placement^='right'] .arrow::before
{
    right: 0;

    border-width: .4rem .4rem .4rem 0;
    border-right-color: #000;
}

.bs-tooltip-bottom,
.bs-tooltip-auto[x-placement^='bottom']
{
    padding: .4rem 0;
}
.bs-tooltip-bottom .arrow,
.bs-tooltip-auto[x-placement^='bottom'] .arrow
{
    top: 0;
}
.bs-tooltip-bottom .arrow::before,
.bs-tooltip-auto[x-placement^='bottom'] .arrow::before
{
    bottom: 0;

    border-width: 0 .4rem .4rem;
    border-bottom-color: #000;
}

.bs-tooltip-left,
.bs-tooltip-auto[x-placement^='left']
{
    padding: 0 .4rem;
}
.bs-tooltip-left .arrow,
.bs-tooltip-auto[x-placement^='left'] .arrow
{
    right: 0;

    width: .4rem;
    height: .8rem;
}
.bs-tooltip-left .arrow::before,
.bs-tooltip-auto[x-placement^='left'] .arrow::before
{
    left: 0;

    border-width: .4rem 0 .4rem .4rem;
    border-left-color: #000;
}

.tooltip-inner
{
    max-width: 200px;
    padding: .25rem .5rem;

    text-align: center;

    color: #fff;
    border-radius: .375rem;
    background-color: #000;
}

.bg-success {
    background-color: #2dce89 !important;
}

a.bg-success:hover,
a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
    background-color: #24a46d !important;
}

.bg-info {
    background-color: #11cdef !important;
}

a.bg-info:hover,
a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
    background-color: #0da5c0 !important;
}

.bg-warning {
    background-color: #fb6340 !important;
}

a.bg-warning:hover,
a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
    background-color: #fa3a0e !important;
}

.bg-danger {
    background-color: #f5365c !important;
}

a.bg-danger:hover,
a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
    background-color: #ec0c38 !important;
}

.bg-default {
    background-color: #172b4d !important;
}

a.bg-default:hover,
a.bg-default:focus,
button.bg-default:hover,
button.bg-default:focus {
    background-color: #0b1526 !important;
}

.bg-transparent {
    background-color: transparent !important;
}

.border-0 {
    border: 0 !important;
}

.rounded-circle {
    border-radius: 50% !important;
}

.d-flex {
    display: flex !important;
}

.justify-content-end {
    justify-content: flex-end !important;
}

.align-items-center {
    align-items: center !important;
}

@media (min-width: 1200px) {

    .justify-content-xl-between {
        justify-content: space-between !important;
    }
}

.sr-only {
    position: absolute;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    width: 1px;
    height: 1px;
    padding: 0;
    white-space: nowrap;
    border: 0;
}

.shadow {
    box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
}

.mb-0 {
    margin-bottom: 0 !important;
}

.mr-2 {
    margin-right: .5rem !important;
}

.mr-3 {
    margin-right: 1rem !important;
}

.mr-4 {
    margin-right: 1.5rem !important;
}

.mt-5 {
    margin-top: 3rem !important;
}

.mb-5 {
    margin-bottom: 3rem !important;
}

.mt-7 {
    margin-top: 6rem !important;
}

.py-4 {
    padding-top: 1.5rem !important;
}

.py-4 {
    padding-bottom: 1.5rem !important;
}

.m-auto {
    margin: auto !important;
}

.text-right {
    text-align: right !important;
}

.text-center {
    text-align: center !important;
}

.text-white {
    color: #fff !important;
}

.text-light {
    color: #adb5bd !important;
}

a.text-light:hover,
a.text-light:focus {
    color: #919ca6 !important;
}

.text-white {
    color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
    color: #e6e6e6 !important;
}

@media print {


    a:not(.btn) {
        text-decoration: underline;
    }

    thead {
        display: table-header-group;
    }

    tr,
  img {
        page-break-inside: avoid;
    }

    p,
  h2,
  h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
  h3 {
        page-break-after: avoid;
    }

@    page {
        size: a3;
    }

    .container {
        min-width: 992px !important;
    }

    .badge {
        border: 1px solid #000;
    }

    .table {
        border-collapse: collapse !important;
    }

    .table td,
  .table th {
        background-color: #fff !important;
    }

    .table-dark {
        color: inherit;
    }

    .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
        border-color: #e9ecef;
    }

    .table .thead-dark th {
        color: inherit;
        border-color: #e9ecef;
    }
}

figcaption,
main {
    display: block;
}

main {
    overflow: hidden;
}

@keyframes floating-lg {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(15px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes floating {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(10px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes floating-sm {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(5px);
    }

    100% {
        transform: translateY(0px);
    }
}

[class*='shadow'] {
    transition: all .15s ease;
}

.text-sm {
    font-size: .875rem !important;
}

.text-white {
    color: #fff !important;
}

a.text-white:hover,
a.text-white:focus {
    color: #e6e6e6 !important;
}

.text-light {
    color: #ced4da !important;
}

a.text-light:hover,
a.text-light:focus {
    color: #b1bbc4 !important;
}

.avatar {
    font-size: 1rem;
    display: inline-flex;
    width: 48px;
    height: 48px;
    color: #fff;
    border-radius: 50%;
    background-color: #adb5bd;
    align-items: center;
    justify-content: center;
}

.avatar img {
    width: 100%;
    border-radius: 50%;
}

.avatar-sm {
    font-size: .875rem;
    width: 36px;
    height: 36px;
}

.avatar-group .avatar {
    position: relative;
    z-index: 2;
    border: 2px solid #fff;
}

.avatar-group .avatar:hover {
    z-index: 3;
}

.avatar-group .avatar + .avatar {
    margin-left: -1rem;
}

.badge {
    text-transform: uppercase;
}

.badge a {
    color: #fff;
}

.btn .badge:not(:first-child) {
    margin-left: .5rem;
}

.btn .badge:not(:last-child) {
    margin-right: .5rem;
}

.badge-dot {
    font-size: .875rem;
    font-weight: 400;
    padding-right: 0;
    padding-left: 0;
    text-transform: none;
    background: transparent;
}

.badge-dot strong {
    color: #32325d;
}

.badge-dot i {
    display: inline-block;
    width: .375rem;
    height: .375rem;
    margin-right: .375rem;
    vertical-align: middle;
    border-radius: 50%;
}

.btn {
    font-size: .875rem;
    position: relative;
    transition: all .15s ease;
    letter-spacing: .025em;
    text-transform: none;
    will-change: transform;
}

.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.btn:not(:last-child) {
    margin-right: .5rem;
}

.btn i:not(:first-child) {
    margin-left: .5rem;
}

.btn i:not(:last-child) {
    margin-right: .5rem;
}

.btn-sm {
    font-size: .75rem;
}

[class*='btn-outline-'] {
    border-width: 1px;
}

.btn-icon-only {
    width: 2.375rem;
    height: 2.375rem;
    padding: 0;
}

a.btn-icon-only {
    line-height: 2.5;
}

.btn-icon-only.btn-sm {
    width: 2rem;
    height: 2rem;
}

.main-content {
    position: relative;
}



@media (min-width: 768px) {

@    keyframes show-navbar-dropdown {
        0% {
      transition: visibility .25s, opacity .25s, transform .25s;
        transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
        opacity: 0;
    }

    100% {
        transform: translate(0, 0);
        opacity: 1;
    }
}

@keyframes hide-navbar-dropdown {
    from {
        opacity: 1;
    }

    to {
        transform: translate(0, 10px);
        opacity: 0;
    }
}
}

@keyframes show-navbar-collapse {
    0% {
        transform: scale(.95);
        transform-origin: 100% 0;
        opacity: 0;
    }

    100% {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes hide-navbar-collapse {
    from {
        transform: scale(1);
        transform-origin: 100% 0;
        opacity: 1;
    }

    to {
        transform: scale(.95);
        opacity: 0;
    }
}

.page-item.active .page-link {
    box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
}

.page-item .page-link,
.page-item span {
    font-size: .875rem;
    display: flex;
    width: 36px;
    height: 36px;
    margin: 0 3px;
    padding: 0;
    border-radius: 50% !important;
    align-items: center;
    justify-content: center;
}

.progress {
    overflow: hidden;
    height: 8px;
    margin-bottom: 1rem;
    border-radius: .25rem;
    background-color: #e9ecef;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}

.progress .sr-only {
    font-size: 13px;
    line-height: 20px;
    left: 0;
    clip: auto;
    width: auto;
    height: 20px;
    margin: 0 0 0 30px;
}

.progress-bar {
    height: auto;
    border-radius: 0;
    box-shadow: none;
}

.table thead th {
    font-size: .65rem;
    padding-top: .75rem;
    padding-bottom: .75rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-bottom: 1px solid #e9ecef;
}

.table th {
    font-weight: 600;
}

.table td .progress {
    width: 120px;
    height: 3px;
    margin: 0;
}

.table td,
.table th {
    font-size: .8125rem;
    white-space: nowrap;
}

.table.align-items-center td,
.table.align-items-center th {
    vertical-align: middle;
}

.table .thead-dark th {
    color: #4d7bca;
    background-color: #1c345d;
}

.table .thead-light th {
    color: #8898aa;
    background-color: #f6f9fc;
}

.table-flush td,
.table-flush th {
    border-right: 0;
    border-left: 0;
}

.table-flush tbody tr:first-child td,
.table-flush tbody tr:first-child th {
    border-top: 0;
}

.table-flush tbody tr:last-child td,
.table-flush tbody tr:last-child th {
    border-bottom: 0;
}

.card .table {
    margin-bottom: 0;
}

.card .table td,
.card .table th {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}

p {
    font-size: 1rem;
    font-weight: 300;
    line-height: 1.7;
}

@media (max-width: 768px) {
    .btn {
        margin-bottom: 10px;
    }
}
.panel.work-progress-table > .panel-heading {
background: none repeat scroll 0 0 #efefef;
-webkit-border-radius: 0;
-moz-border-radius: 0;
-ms-border-radius: 0;
-o-border-radius: 0;
border-radius: 0;
color: #333333;
float: left;
font-family: roboto;
font-size: 16px;
font-weight: normal;
letter-spacing: 0.3px;
padding: 17px 30px 11px;
width: 100%;
}
.work-progress-table > .panel-heading > i {
color: #888888;
float: left;
font-family: Lato;
font-size: 11px;
font-style: normal;
letter-spacing: 0.3px;
line-height: 10px;
margin-bottom: 10px;
margin-top: 7px;
width: 100%;
}

.panel-default > .panel-heading > .dropdown {
float: right;
margin-top: -42px;
}

/* Work Progress table */
.panel.work-progress-table {
    border: medium none;
    
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    border-radius: 0;
	
    box-shadow: none;
    float: left;
    margin: 0;
    width: 100%;
}
.panel.work-progress-table > .panel-heading {
    background: none repeat scroll 0 0 #efefef;
    
	-webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    border-radius: 0;
	
    color: #333333;
    float: left;
    font-family: roboto;
    font-size: 16px;
    font-weight: normal;
    letter-spacing: 0.3px;
    padding: 17px 30px 11px;
    width: 100%;
}
.work-progress-table > .panel-heading > i {
    color: #888888;
    float: left;
    font-family: Lato;
    font-size: 11px;
    font-style: normal;
    letter-spacing: 0.3px;
    line-height: 10px;
    margin-bottom: 10px;
    margin-top: 7px;
    width: 100%;
}
.panel-default > .panel-heading > .dropdown {
    float: right;
    margin-top: -42px;
}
.work-progress-table td .progress {
    background: none repeat scroll 0 0 #f3f3f3;

    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none;
    box-shadow: none;
	
    height: 6px;
    margin: 7px 0 0;
    overflow: visible;
}
.work-progress-table td .progress > .progress-bar {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    -ms-box-shadow: none;
    -o-box-shadow: none;
    box-shadow: none;
	
    position: relative;
}
.work-progress-table td .progress > .progress-bar > span {
    background: none repeat scroll 0 0 #8d8d8d;

    font-family: Roboto;
    font-size: 10px;
    height: 18px;
    line-height: 18px;
    margin-top: -9px;
    position: absolute;
    right: 0;
    top: 50%;
    width: 31px;
}
.work-progress-table .table td {
    padding: 15px 10px;
}
.work-progress-table .table td {
    font-family: Lato;
    font-size: 13px;
    letter-spacing: 0.3px;
    padding: 15px 10px;
}

.red, .support-ticket .removed, .edit-remove > li > .remove, .friend-list li > span.offline:before {
background: -moz-linear-gradient(top, #ff5959 0%, #ff3b3b 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ff3b3b), color-stop(100%,#f9f9f9));
background: -webkit-linear-gradient(top, #ff5959 0%,#ff3b3b 100%);
background: -o-linear-gradient(top, #ff5959 0%,#ff3b3b 100%);
background: -ms-linear-gradient(top, #ff5959 0%,#ff3b3b 100%);
background: linear-gradient(to bottom, #ff5959 0%,#ff3b3b 100%);
color: #fff;
}

.dropdown{
	position:relative;
}
.dropdown-toggle:focus{
	outline:0;
}
.dropdown-menu{
	position:absolute;
	background-color: #313338;
	top:100%;
	left:0;
	z-index:99999;
	display:none;
	float:left;
	min-width:160px;
	padding:5px 0;
	margin:2px 0 0;
	font-size:14px;
	list-style:none;
	border:1px solid #2b2d31;
	border:1px solid rgba(0,0,0,0.15);
	border-radius:4px;
	-webkit-box-shadow:0 6px 12px #2b2d31;
	box-shadow:0 6px 12px #313338;
}

.dropdown-menu.pull-right{
	right:0;
	left:auto
}
.dropdown-menu .divider{
	height:1px;
	margin:9px 0;
	overflow:visibility;
	background-color:#2b2d31;
}
.dropdown-menu>li>a{
	display:block;
	padding:3px 20px;
	clear:both;
	font-weight:normal;
	line-height:1.428571429;
	background-color: #313338;
	color:#333;
	white-space:nowrap;
}
.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus{
	color:#fff;
	text-decoration:none;
	background-color:#2b2d31;
}
.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{
	color:#fff;
	text-decoration:none;
	background-color:#2b2d31;
	outline:0;
}

.open>.dropdown-menu{
	background-color: #313338;
	display:block
}
 </style>