 <script setup>
        import { ref } from 'vue';

        defineProps(['id', 'date', 'position', 'company', 'location', 'contact_email', 'contact_phone', 'calls', 'interviews']);
        //const applications = ref(data) // data is above array of faq questions & answers
</script>
    <template>
        <div class="application">
           <details>
                <summary>
                    <input type="text" name="date" :value="date" />
                    <input type="text" name ="position" :value="position" />
                    <input type="text" name="company" :value="company"  />
                    <input type="text" name="location" :value="location"  />
                </summary>
                <input type="text" name="contact_email" :value="contact_email"  />
                <input type="text" name="contact_phone" :value="contact_phone"  />
                <textarea name="calls" :value="calls"></textarea>
                <textarea name="interviews" :value="interviews"></textarea>
           </details>
        </div>
    </template>
    <style scoped lang="less">
    .main {
            width: 800px;
            box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.5);
            margin: 0 auto;
            margin-top: 10%;
            margin-bottom: 10%;
            background-color: rgb(240, 248, 255);
            padding: 10px;
            border-radius: 6px;
            .applications {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>
