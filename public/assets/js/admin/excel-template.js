// Inisiasi workbook
const workbook = new ExcelJS.Workbook();

// Detail workbook
workbook.creator = 'Fakultas Vokasi UNAIR';
workbook.lastModifiedBy = 'Fakultas Vokasi UNAIR';
workbook.created = new Date(2020, 11, 01);
workbook.modified = new Date();

// Force workbook calculation on load
workbook.calcProperties.fullCalcOnLoad = true;

workbook.views = [
    {
      x: 0, y: 0, width: 10000, height: 20000,
      firstSheet: 0, activeTab: 1, visibility: 'visible'
    }
];

// Inisiasi worksheet
const sheet = workbook.addWorksheet('Daftar Partisipan');