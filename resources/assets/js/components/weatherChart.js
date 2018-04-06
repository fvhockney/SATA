import {Line, mixins} from 'vue-chartjs'

const {reactiveProp} = mixins

export default {
  extends: Line,
  mixins: [mixins.reactiveProp],
  props: ['chartData','options'],
  data() {
    return {

    }
  },
  mounted () {
    this.$root.$on('dataChanged', function(chart){
      console.log('Yippee',chart)
      chart.renderChart(chart.chartData, chart.options)
    })
    console.log(this)
    this.renderChart(this.chartData, this.options)
  }
}
