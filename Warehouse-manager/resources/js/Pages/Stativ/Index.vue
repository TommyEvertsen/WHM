<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/vue3';
import Stativ from '@/Components/Stativ.vue';

defineProps(['stativ']);
 
const form = useForm({
    name: '',
    rows: '',
    columns: '',
    measurementSize: '',
});
</script>
 
<template>
    <Head title="Stativ" />
 
    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
            <form @submit.prevent="form.post(route('stativ.store'), { onSuccess: () => form.reset() })">
            <textarea v-model="form.name" placeholder="Name of new stativ?" class="block w-full border-gray-300 ..."></textarea>
            <input type="number" v-model="form.rows" name="Rows" id="rows"> Select amount of rows
            <br>
             <input type="number" v-model="form.columns" name="Columns" id="columns"> Select amount of columns
              <br>
         <input type="number" v-model=" form.measurementSize" name="Measurement" id="measurement-size"> Select tommer
    <InputError :message="form.errors.message" class="mt-2" />
    <PrimaryButton class="mt-4">Make stativ</PrimaryButton>
</form>

<div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form @submit.prevent="form.post(route('item.store'), { onSuccess: () => form.reset() })">
            <textarea v-model="form.name" ></textarea>
        </form>
    </div>

            <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
                <Stativ
                    v-for="stativ in stativ"
                    :key="stativ.id"
                    :stativ="stativ"
                />
            </div>

        </div>
    </AuthenticatedLayout>
</template>