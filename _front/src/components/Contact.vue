<template>
  <v-container fluid class="parallax4">
    <v-container fluid  id="contactMe" data-spy>
      <v-row class="justify-center pb-4">
        <div class="title blue--text text--lighten-2">Un projet, une question ?
        Envoyez-moi un message</div>
      </v-row> <v-divider class="my-3"></v-divider>
      <v-row class="justify-center">
        <v-col cols="12" sm="6" md="3">
          <v-card flat class="transparent grey--text">
            <v-card-text>Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt
              ornare.
            </v-card-text>
            <v-list class="transparent">
              <v-list-item>
                <v-list-item-action>
                  <v-icon class="blue--text text--lighten-2">mdi-phone</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>777-867-5309</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-action>
                  <v-icon class="blue--text text--lighten-2">mdi-map-marker</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Chicago, US</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-action>
                  <v-icon class="blue--text text--lighten-2">mdi-email</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>john@vuetifyjs.com</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </v-list>
          </v-card>
        </v-col>
        <v-col cols="12" sm="6" md="3">
          <v-card flat class="transparent grey--text">
            <v-card-text>
              <form>
                <v-text-field
                  v-model="name"
                  filled
                  label="Name"
                  color="deep-purple"
                  required/>
                <v-text-field
                  v-model="email"
                  :rules="[rules.email]"
                  filled
                  color="deep-purple"
                  label="Email address"
                  type="email"/>
                <v-textarea
                  v-model="message"
                  auto-grow
                  filled
                  color="deep-purple"
                  label="Message"
                  rows="3"/>
                <v-row class="justify-center">
                  <v-btn
                    :loading="isLoading"
                    class="white--text"
                    color="blue"
                    depressed
                  >Envoyer
                  </v-btn>
                </v-row>
              </form>
            </v-card-text>
          </v-card>
        </v-col>
        <v-col cols="12" sm="6" md="3">
          <v-card flat class="transparent grey--text">
            <v-card-text>Cras facilisis mi vitae nunc lobortis pharetra. Nulla volutpat tincidunt
              ornare.
            </v-card-text>
            <v-list class="transparent">
              <v-list-item>
                <v-list-item-action>
                  <v-icon class="blue--text text--lighten-2">mdi-phone</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>777-867-5309</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-action>
                  <v-icon class="blue--text text--lighten-2">mdi-map-marker</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>Chicago, US</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
              <v-list-item>
                <v-list-item-action>
                  <v-icon class="blue--text text--lighten-2">mdi-email</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                  <v-list-item-title>john@vuetifyjs.com</v-list-item-title>
                </v-list-item-content>
              </v-list-item>
            </v-list>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </v-container>
</template>
<script>
export default {
  name: 'Contact',
  data() {
    return {
      name: '',
      message: '',
      email: undefined,
      isLoading: false,
      rules: {
        email: v => (v || '').match(/@/) || 'Please enter a valid email',
        length: len => v => (v || '').length >= len || `Invalid character length, required ${len}`,
        required: v => !!v || 'This field is required',
      },
    };
  },
  created() {

  },
  methods: {
    submit() {
    },
  },


};
</script>

<style scoped>
  .parallax4 {
    background-color: whitesmoke;
    padding-bottom: 3em;
  }
</style>
