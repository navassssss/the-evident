!(function (n) {
    "function" == typeof define && define.amd ? define(["jquery"], n) : "object" == typeof module && "object" == typeof module.exports ? n(require("jquery")) : n(jQuery);
})(function (n) {
    switch (customData.lang) {
        case "es":
        case "pt":
            n.timeago.settings.strings = {
                prefixAgo: "hace",
                prefixFromNow: "dentro de",
                suffixAgo: "",
                suffixFromNow: "",
                seconds: "menos de un minuto",
                minute: "un minuto",
                minutes: "unos %d minutos",
                hour: "una hora",
                hours: "%d horas",
                day: "un día",
                days: "%d días",
                month: "un mes",
                months: "%d meses",
                year: "un año",
                years: "%d años",
            };
            break;
        case "fr":
            n.timeago.settings.strings = {
                prefixAgo: "il y a",
                prefixFromNow: "d'ici",
                seconds: "moins d'une minute",
                minute: "environ une minute",
                minutes: "environ %d minutes",
                hour: "environ une heure",
                hours: "environ %d heures",
                day: "environ un jour",
                days: "environ %d jours",
                month: "environ un mois",
                months: "environ %d mois",
                year: "un an",
                years: "%d ans",
            };
            break;
        case "ar":
            function e(n, e) {
                return e[(plural = 0 === n ? 0 : 1 === n ? 1 : 2 === n ? 2 : n % 100 >= 3 && n % 100 <= 10 ? 3 : n % 100 >= 11 ? 4 : 5)];
            }
            n.timeago.settings.strings = {
                prefixAgo: "منذ",
                prefixFromNow: "بعد",
                suffixAgo: null,
                suffixFromNow: null,
                second: function (n) {
                    return e(n, ["أقل من ثانية", "ثانية واحدة", "ثانيتين", "%d ثوانٍ", "%d ثانية", "%d ثانية"]);
                },
                seconds: function (n) {
                    return e(n, ["أقل من ثانية", "ثانية واحدة", "ثانيتين", "%d ثوانٍ", "%d ثانية", "%d ثانية"]);
                },
                minute: function (n) {
                    return e(n, ["أقل من دقيقة", "دقيقة واحدة", "دقيقتين", "%d دقائق", "%d دقيقة", "دقيقة"]);
                },
                minutes: function (n) {
                    return e(n, ["أقل من دقيقة", "دقيقة واحدة", "دقيقتين", "%d دقائق", "%d دقيقة", "دقيقة"]);
                },
                hour: function (n) {
                    return e(n, ["أقل من ساعة", "ساعة واحدة", "ساعتين", "%d ساعات", "%d ساعة", "%d ساعة"]);
                },
                hours: function (n) {
                    return e(n, ["أقل من ساعة", "ساعة واحدة", "ساعتين", "%d ساعات", "%d ساعة", "%d ساعة"]);
                },
                day: function (n) {
                    return e(n, ["أقل من يوم", "يوم واحد", "يومين", "%d أيام", "%d يومًا", "%d يوم"]);
                },
                days: function (n) {
                    return e(n, ["أقل من يوم", "يوم واحد", "يومين", "%d أيام", "%d يومًا", "%d يوم"]);
                },
                month: function (n) {
                    return e(n, ["أقل من شهر", "شهر واحد", "شهرين", "%d أشهر", "%d شهرًا", "%d شهر"]);
                },
                months: function (n) {
                    return e(n, ["أقل من شهر", "شهر واحد", "شهرين", "%d أشهر", "%d شهرًا", "%d شهر"]);
                },
                year: function (n) {
                    return e(n, ["أقل من عام", "عام واحد", "%d عامين", "%d أعوام", "%d عامًا"]);
                },
                years: function (n) {
                    return e(n, ["أقل من عام", "عام واحد", "عامين", "%d أعوام", "%d عامًا", "%d عام"]);
                },
            };
            break;
        case "in":
            n.timeago.settings.strings = {
                prefixAgo: null,
                prefixFromNow: null,
                suffixAgo: "yang lalu",
                suffixFromNow: "dari sekarang",
                seconds: "kurang dari semenit",
                minute: "sekitar satu menit",
                minutes: "%d menit",
                hour: "sekitar sejam",
                hours: "sekitar %d jam",
                day: "sehari",
                days: "%d hari",
                month: "sekitar sebulan",
                months: "%d bulan",
                year: "sekitar setahun",
                years: "%d tahun",
            };
    }
});
