<template>
  <v-app id="top">
    <v-navigation-drawer v-model="drawer" app clipped temporary>
      <v-list dense>
        <v-list-item>
          <v-list-item-action>
            <a href="#">A propos</a>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Dashboard</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item>
          <v-list-item-action>
            <a href="#">Portfolio</a>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Settings</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item>
          <v-list-item-action>
            <a href="#">Compétences</a>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Settings</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item>
          <v-list-item-action>
            <a href="#">Expériences</a>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Settings</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item>
          <v-list-item-action>
            <a href="#">Contactez moi</a>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Settings</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
<!--    Main content-->
    <v-app-bar app clipped-left>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"/>
      <v-toolbar-items class="nav myTitle">Développeur Web</v-toolbar-items>
      <div class="flex-grow-1"></div>
      <v-toolbar-items class="nav">
        <ul class="navLink">
          <a href="#propos" @click.prevent="scrollTo('#propos')">
            à propos</a>
          <a href="#experiences" @click.prevent="scrollTo('#experiences')">
            Compétences</a>
          <a href="#portfolio" @click.prevent="scrollTo('#portfolio')">
            Portfolio</a>
          <a href="#contactMe" @click.prevent="scrollTo('#contactMe')">
            Contact</a>
        </ul>
      </v-toolbar-items>
    </v-app-bar>
    <v-content class="fullPage">
      <v-btn id="back-to-top-btn" fab>
        <v-icon>mdi-arrow-up-bold-outline</v-icon>
      </v-btn>
      <Jumbotron/>
      <Experience/>
      <Profil/>
      <Development/>
      <Project/>
      <Contact/>
      <Footer/>
    </v-content>
  </v-app>
</template>

<script>
import Jumbotron from '@/components/Jumbotron.vue';
import Profil from '@/components/Profil.vue';
import Project from '@/components/Project.vue';
import Experience from '@/components/Experience.vue';
import Contact from '@/components/Contact.vue';
import Development from '@/components/Development.vue';
import Footer from '@/components/Footer.vue';

export default {
  name: 'App',
  data() {
    return {
      title: 'Your Logo',
      drawer: null,
      valeur_scroll: 0,
      spies: null,
      anchor: null,
      observer: null,
      ratio: 0.5,
    };
  },
  components: {
    Jumbotron,
    Profil,
    Project,
    Experience,
    Contact,
    Development,
    Footer,
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll);
    this.spies = document.querySelectorAll('[data-spy]');
    if (this.spies.length > 0) {
      const y = Math.round(window.innerHeight * this.ratio);
      this.observer = new IntersectionObserver(this.callback, {
        rootMargin: `-${window.innerHeight - y - 1}px 0px -${y}px 0px`,
      });
      this.spies.forEach((spy) => {
        this.observer.observe(spy);
      });
    }
  },
  beforeDestroy() {
    window.removeEventListener('scroll', this.handleScroll);
  },
  destroyed() {
    this.observer.disconnect();
  },
  methods: {
    // eslint-disable-next-line consistent-return
    active(elem) {
      const id = elem.getAttribute('id');
      this.anchor = document.querySelector(`a[href="#${id}"]`);
      if (this.anchor === null) {
        return null;
      }
      this.anchor.parentElement
        .querySelectorAll('.router-link-active')
        .forEach(node => node.classList.remove('router-link-active'));
      this.anchor.classList.add('router-link-active');
    },
    // eslint-disable-next-line no-unused-vars
    callback(entries, observer) {
      entries.forEach((entry) => {
        if (entry.intersectionRatio > 0) {
          this.active(entry.target);
          // console.log(entry);
        }
      });
    },
    backToTop() {
      this.scrollTo('#top');
    },
    scrollTo(selector) {
      document.querySelector(selector).scrollIntoView({ behavior: 'smooth' });
    },
    handleScroll() {
      const backToTopButton = document.querySelector('#back-to-top-btn');
      // const navBar = document.querySelector('#navbarMe');
      this.valeur_scroll = window.scrollY;
      document.querySelector('.parallax1').style.transform = `translateY(${this.valeur_scroll / 8}px)`;
      document.querySelector('.parallax3').style.transform = `translateY(${this.valeur_scroll / 15}px)`;
      document.querySelector('.parallax2').style.transform = `translateY(${this.valeur_scroll / 17}px)`;
      document.querySelector('.parallax4').style.transform = `translateY(${this.valeur_scroll / 18}px)`;
      document.querySelector('.parallax5').style.transform = `translateY(${this.valeur_scroll / 20}px)`;
      document.querySelector('.parallax6').style.transform = `translateY(${this.valeur_scroll / 20}px)`;
      if (window.pageYOffset > 380) {
        backToTopButton.style.display = 'block';
      } else {
        backToTopButton.style.display = 'none';
      }
      backToTopButton.addEventListener('click', this.backToTop);
      // if (window.pageYOffset > 300) {
      //   navBar.style.background = '#1867C0';
      //   navBar.style.color = '#fff';
      // } else {
      //   navBar.style.background = 'white';
      //   navBar.style.color = '#161864';
      // }
    },
  },
};
</script>

<style scoped>
  .router-link-active{
    border-bottom: 1px solid rgba(50, 50, 52, 0.54);
    /*background: rgba(223, 223, 223, 0.38);*/
  }
  .nav a {
    letter-spacing: 1.2px;
    font-weight: bold;
    font-family: verdana,sans-serif;
    padding: 1em;
    color: rgb(123, 123, 128);
    text-decoration: none;
    font-size: 15px;
  }
  .nav {
    display: inline-flex;
    flex-wrap: wrap;
    align-content:center;
  }
  .navLink{
    padding-right: 3em;
  }
  .myTitle{
    padding-left: 3em;
    letter-spacing: 0.5px;
    font-size: 15px;
    font-weight: bold;
    font-family: verdana,sans-serif;
    color: rgb(123, 123, 128);
  }
  .fullPage{
    background: white;
    margin: 0;
    padding: 0;
  }
  #back-to-top-btn{
    opacity: 0.5;
    display: none;
    z-index: 3000;
    width: 20px;
    position: fixed;
    bottom: 50px;
    right: 20px;
    cursor: pointer;
    background-color: white;
    color: #764fcd;
  }
  #back-to-top-btn:hover,#back-to-top-btn:focus{
    background-color: #764fcd;
    color: #fff;
  }

  @media (max-width: 768px) {
    #back-to-top-btn{
      background-color: transparent;
      outline: none;
      width: 10px;
    }
    .nav a{
      font-size: 11px;
      padding: 2px;
      letter-spacing: 0.3px;
    }
    .navLink{
      padding: 0;
    }
    .myTitle{
      font-size: 11px;
      padding-left: 0;
    }
  }

</style>
