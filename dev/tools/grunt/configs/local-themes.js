/**
 grunt clean:maksymoliynik_luma_en_us && grunt exec:maksymoliynik_luma_en_us && grunt less:maksymoliynik_luma_en_us && grunt watch
ho */
module.exports = {
  maksymoliynik_luma_en_us: {
        area: 'frontend',
        name: 'Maksymoliynik/luma',
        locale: 'en_US',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    },
};
