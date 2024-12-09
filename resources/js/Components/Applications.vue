 <script setup>
import { ref } from 'vue'
import Application from './Application.vue'
    data = {};
    const applications = ref(data) // data is above array of applications
    
</script>
    <template>
        <main>
            <div id="applications">
                <p>Applications</p>
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
            .faqs{
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>