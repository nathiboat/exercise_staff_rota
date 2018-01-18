<template>
    <div>
        <div class="mb-4">
           <div class="row">
               <div class="col">
                   <div class="btn-group btn-group-toggle" data-toggle="buttons">
                       <label class="btn btn-primary active">
                           <input type="radio" name="options"> Shift Time
                       </label>
                       <label class="btn btn-secondary active" @click="setShift('11:00:00', '20:00:00')">
                           <input type="radio" name="options"> 11:00 - 20:00
                       </label>
                       <label class="btn btn-secondary" @click="setShift('15:00:00', '23:00:00')">
                           <input type="radio" name="options"> 15:00 - 23:00
                       </label>
                       <label class="btn btn-secondary" @click="setShift('17:00:00', '21:00:00')">
                           <input type="radio" name="options" > 17:00 - 21:00
                       </label>
                       <label class="btn btn-secondary" @click="setShift('19:00:00', '03:00:00')">
                           <input type="radio" name="options" > 19:00 - 03:00
                       </label>


                   </div>
               </div>
           </div>
        </div>
        <div class="row">
            <div class="col-1">
                <div class="btn-group-vertical">
                    <button type="button" class="btn btn-primary">
                        Day
                    </button>
                    <button type="button"
                            v-for="day in days"
                            :class="(day.daynumber  == selectedDay)  ? ' active' : ''"
                            class="btn btn-secondary "
                            @click="setDay(day.daynumber)"
                    >
                        {{day.daynumber}}
                    </button>
                </div>
            </div>
            <div class="col-11">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" >ID</th>
                        <th>Rota ID</th>
                        <th>Day Number</th>
                        <th>Staff ID</th>
                        <th>Slot Type</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Work Hours</th>
                    </tr>
                    </thead>
                    <tbody>
                    <template>
                        <tr v-for="rota in displayShift" v-if="displayShift != {}">
                            <th scope="row">{{ rota.id }}</th>
                            <td>{{ rota.rotaid }}</td>
                            <td>{{ rota.daynumber }}</td>
                            <td>{{ rota.staffid }}</td>
                            <td>{{ rota.slottype }}</td>
                            <td>{{ rota.starttime }}</td>
                            <td>{{ rota.endtime }}</td>
                            <td>{{ rota.workhours }}</td>

                        </tr>
                        <tr v-else>
                            <td colspan="8">
                                No data
                            </td>
                        </tr>
                    </template>
                    <tr>
                        <td colspan="7">Total</td>
                        <td>{{ sum  }} Hours</td>
                    </tr>
                    <tr>
                        <td colspan="7"></td>
                        <td>{{ sum * 60 }} minuts</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data () {
            return {
                today: '',
                rotas: {},
                selectedDay: 0,
                shift: {},
                selectedTime: {
                    starttime: '11:00:00',
                    endtime: '20:00:00'
                }
            }
        },
        computed: {
          days () {
              var arr = _.uniqBy(this.rotas, function (e) {
                  return e.daynumber;
              })
              arr =_.keyBy(arr, function(o) {
                  return o.daynumber;
              });

              return arr
          },
          displayShift () {

              var display
              var selected = this.selectedTime
              var day = this.selectedDay
              display = _.filter(this.rotas, function (item) {
                  return item.starttime == selected.starttime
                  && item.endtime == selected.endtime
                  && item.daynumber ==  day
              } )

              return display
          },
          sum () {
              var total = 0
              for ( var i = 0, _len = this.displayShift.length; i < _len; i++ ) {
                  total += this.displayShift[i].workhours
              }
              return total
          }

        },
        methods: {
          setShift (start, end) {
            this.selectedTime = {
                starttime: start,
                endtime: end
            }
          },
          setDay (day) {
            this.selectedDay = day
          }
        },
        mounted () {
            axios.get('/api/rotas').then((response) => {
                this.rotas = response.data
            })

            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1;
            var yyyy = today.getFullYear();

            if(dd<10) {
                dd = '0'+dd
            }

            if(mm<10) {
                mm = '0'+mm
            }
            this.today = mm + '/' + dd + '/' + yyyy;

        }
    }
</script>