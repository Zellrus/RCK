import { createI18n } from 'vue-i18n'

import en from './locales/en.json'
import ru from './locales/ru.json'
export default createI18n({
    locale: import.meta.env.VITE_DEFAULT_LOCALE, // set locale
    fallbackLocale: import.meta.env.VITE_FALLBACK_LOCALE, // set fallback locale
    messages :  {en,ru}, // set locale messages

    legacy:   false,
    globalInjection: true
})
