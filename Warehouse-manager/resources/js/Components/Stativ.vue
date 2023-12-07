<script setup>
defineProps(['stativ']);



</script>
 
<template>
    <div class="p-6 flex space-x-2">
        <div class="flex-1">
            <div class="flex justify-between items-center">
                <div>
                    <span class="text-gray-800">{{ stativ.name }}</span> 
                    <span class="text-gray-800">"{{ stativ.measurementSize }}"</span> <br> <br>
                    <small class="ml-2 text-sm text-gray-600">Created at{{ new Date(stativ.created_at).toLocaleString() }}</small>
                
                    <table class="border-collapse border border-gray-300 mt-4">
          <tbody>
            <!-- Loop for rows -->
            <tr v-for="row in Array(stativ.rows).fill(null).map((_, rowIndex) => rowIndex)" :key="row">
              <!-- Loop for columns -->
              <td v-for="column in Array(stativ.columns).fill(null).map((_, colIndex) => colIndex)" :key="column" class="border border-gray-300 p-2">
                <!-- Your table cell content goes here -->
                <!-- Example: -->
                <!-- <div class="p-2 border border-gray-300">{{ `Row ${row + 1}, Col ${column + 1}` }}</div> -->
              </td>
            </tr>
          </tbody>
        </table>
                
                </div>
            </div>
        </div>
    </div>
</template>