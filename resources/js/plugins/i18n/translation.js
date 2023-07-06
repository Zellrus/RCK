import i18n from "./i18n.js";
const Trans = {
    get defaultLocale() {
        return import.meta.env.VITE_DEFAULT_LOCALE
    },

    get supportedLocales(){
        return import.meta.env.VITE_SUPPORTED_LOCALES.split(",");
    },
    set currentLocale(newLocale){
      i18n.global.locale.value = newLocale
    },
    async switchLanguage(newLocale){
        this.currentLocale = newLocale
        document.querySelector('html').setAttribute('lang', newLocale)
        localStorage.setItem('user-locale',newLocale)
        switch (document.querySelector('html').getAttribute('lang')){
            case 'ru':    document.querySelector('title').innerText="РЦК";break;
            case 'en':    document.querySelector('title').innerText="RCK";break;
        }
    },
    getUserLocale() {
        const locale = window.navigator.language ||
            window.navigator.userLanguage ||
            Trans.defaultLocale

        return {
            locale: locale,
            localeNoRegion: locale.split('-')[0]
        }
    },
    guessDefaultLocale() {
        const userPersistedLocale = Trans.getPersistedLocale()
        if(userPersistedLocale) {
            return userPersistedLocale
        }

        const userPreferredLocale = Trans.getUserLocale()

        if (Trans.isLocaleSupported(userPreferredLocale.locale)) {
            return userPreferredLocale.locale
        }

        if (Trans.isLocaleSupported(userPreferredLocale.localeNoRegion)) {
            return userPreferredLocale.localeNoRegion
        }

        return Trans.defaultLocale
    },
    isLocaleSupported(locale) {
        return Trans.supportedLocales.includes(locale)
    },
    getPersistedLocale() {
        const persistedLocale = localStorage.getItem("user-locale")

        if(Trans.isLocaleSupported(persistedLocale)) {
            return persistedLocale
        } else {
            return null
        }
    },
    async routeMiddleware(to, _from, next) {
        const paramLocale = to.params.locale

        if(!Trans.isLocaleSupported(paramLocale)) {
            return next(Trans.guessDefaultLocale())
        }

        await Trans.switchLanguage(paramLocale)

        return next()
    },

}

export default Trans
