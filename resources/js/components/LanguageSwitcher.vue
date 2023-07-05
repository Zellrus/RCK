<template>

    <select @change ='switchLanguage' class="dropdown btn">
            <option
                v-for="sLocale in suppotredLocales"
                :key = "`localle-${sLocale}`"
                :value="sLocale"
                :selected="locale === sLocale"
                class="dropdown-item" href="#"> {{t(`locale.${sLocale}`)}}</option>

    </select>

<!--<select @change ='switchLanguage'>-->
<!--    <option-->
<!--    v-for="sLocale in suppotredLocales"-->
<!--    :key = "`localle-${sLocale}`"-->
<!--    :value="sLocale"-->
<!--    :selected="locale === sLocale"-->
<!--    >-->
<!--        {{t(`locale.${sLocale}`)}}-->
<!--    </option>-->

<!--</select>-->
</template>

<script>
import {useI18n} from "vue-i18n";
import Translation from "..//plugins/i18n/translation.js";
import { useRouter } from "vue-router"

export default {
    name: "LanguageSwitcher",

    setup(){
        const {t , locale} = useI18n()

        const suppotredLocales = Translation.supportedLocales

        const router = useRouter()
        const switchLanguage = async (event)=>{
            const newLocale = event.target.value
            await Translation.switchLanguage(newLocale)
            try {
                await router.replace({ params: { locale: newLocale } })
            } catch(e) {
                console.log(e)
                router.push("/")
            }
        }



        return {switchLanguage,t,locale, suppotredLocales}

    },
}
</script>

<style scoped>

</style>
