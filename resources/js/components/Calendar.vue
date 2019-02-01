import{ VCalendar } from 'vue-search-select';


<template>
  <v-calendar :theme-styles='themeStyles' :attributes='attrs'>
  </v-calendar>
</template>

<script>
export default {
  data() {
    return {
      attrs: [
        {
          key: 'today',
          dates: new Date(),
          highlight: {
            backgroundColor: '#330033',
          },
          // Just use a normal style
          contentStyle: {
            color: 'white',

          }
        },
      ],
      themeStyles:{
        wrapper:{
          background: '#fafafa',
          
        },
        headerArrows:{
          color:'lightgray',
          
        },
      },
    };
  },
};
</script>