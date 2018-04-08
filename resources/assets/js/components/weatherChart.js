import {Line, mixins} from 'vue-chartjs';
const { reactiveProp } = mixins;

export default {
  extends: Line,
  mixins: [reactiveProp],
  props: ['chartData', 'options'],
  data() {
    return {

    }
  },
  mounted () {
    this.renderChart(this.$store.getters.displayData, this.options)
  },
  computed: {
  },
}
