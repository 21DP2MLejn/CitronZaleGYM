<template>
<main>
    <div class="navbar">
        <NavBar/>
    </div>
    <div class="table-container">
        <table>
       <tr>
           <th></th>
           <th>Monday</th>
           <th>Tuesday</th>
           <th>Wednesday</th>
           <th>Thursday</th>
           <th>Friday</th>
       </tr>
       <tr>
           <td>12:00</td>
           <td></td>
           <td>INDOOR CYCLING</td>
           <td></td>
           <td>STRETCH & BALANCE</td>
           <td>CIRCUIT TRAINING</td>
       </tr>
       <tr>
           <td>13:00</td>
           <td>POWER LIFTING</td>
           <td></td>
           <td>ZUMBA</td>
           <td></td>
           <td>PILATES</td>
       </tr>
       <tr>
           <td>14:00</td>
           <td></td>
           <td>YOGA</td>
           <td>POWER LIFTING</td>
           <td></td>
           <td></td>
       </tr>
       <tr>
           <td>15:00</td>
           <td>PILATES</td>
           <td></td>
           <td></td>
           <td>KICKBOXING</td>
           <td></td>
       </tr>
       <tr>
           <td>16:00</td>
           <td></td>
           <td>INDOOR CYCLING</td>
           <td></td>
           <td>STRETCH & BALANCE</td>
           <td>CIRCUIT TRAINING</td>
       </tr>
       <tr>
           <td>17:00</td>
           <td>POWER LIFTING</td>
           <td></td>
           <td>ZUMBA</td>
           <td></td>
           <td>PILATES</td>
       </tr>
       <tr>
           <td>18:00</td>
           <td></td>
           <td>YOGA</td>
           <td>POWER LIFTING</td>
           <td></td>
           <td></td>
       </tr>
       <tr>
           <td>19:00</td>
           <td>CORE TRAINING</td>
           <td>FULL BODY CIRCLES</td>
           <td></td>
           <td></td>
           <td>YOGA</td>
       </tr>
       <tr>
           <td>20:00</td>
           <td>PILATES</td>
           <td></td>
           <td>KICKBOXING</td>
           <td></td>
           <td></td>
       </tr>
   </table>
    </div>
</main>
</template>

<script>
import NavBar from '../components/NavBar.vue';

export default{
    components:{
        NavBar,
    }
}
</script>

<style scoped>
.table-container{
    position: relative;
    top: 5rem;
}

table {
   width: 100%;
   border-collapse: collapse;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
   border-radius: 10px;
}

th, td {
   border: 1px solid #ddd;
   padding: 15px;
   text-align: left;
   font-size: 18px;
}

th {
   background-color: var(--ShinyShamrock);
   color: var(--Black);
   font-weight: var(--font-bold);
   height: 4rem;
}

input[type="text"] {
   width: 100%;
   box-sizing: border-box;
}

</style>