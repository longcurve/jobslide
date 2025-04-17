 <script setup>
import { computed, onMounted, ref } from 'vue'
import Application from './Application.vue'

    let data = ref();
    let test_data = [
        {
        "id": 12345,
        "date": "11/01/2025", 
        "position": "Cashier", 
        "company": "Retailed", 
        "location": "Syracuse, NY",
        "contact_email": "contact@email.com", 
        "contact_phone": "291-666-5454",
        "calls": "Calls",
        "interviews": "Interviews"
        }
    ];
    const applications = ref(data); // data is above array of applications

    onMounted(() => {
        axios
        .get('http://172.23.18.177:8000/api/applications')
        .then((response) => {
            data.value = response;
            console.log(response);
        })
    });
</script>
    <template>
        <main>
            
            <div id="applications">
                <Application
                        v-for="row in applications"
                        :key="row.id"
                        :date="row.date"
                        :position="row.position"
                        :company="row.company"
                        :location="row.location"
                        :contact_email="row.contact_email"
                        :contact_phone="row.contact_phone"
                        :calls="row.calls"
                        :interviews="row.interviews"
                    />
            </div>
        </main>
    </template>
   <style scoped lang="less">
        .main{
            width: 500px;
            box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.5);
            margin: 0 auto;
            margin-top: 10%;
            margin-bottom: 10%;
            background-color: rgb(240, 248, 255);
            padding: 10px;
            border-radius: 6px;
            .applications{
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>