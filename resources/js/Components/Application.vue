 <script setup>
        import { ref } from 'vue'

        const faqs = ref(data) // data is above array of faq questions & answers
</script>
    <template>
        <div class="application">
           <details>
                <summary>
                    <date name="date" />
                    <input type="text" name="position" />
                    <input type="text" name="company" />
                </summary>
                <input type="text" name="contact_email" />
                <input type="text" name="contact_phone" />
                <textarea name="calls"></textarea>
                <textarea name="interviews"></textarea>
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
