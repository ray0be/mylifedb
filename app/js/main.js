/**
 * main.js
 */


/**
 * ==========================
 * Default data
 * ==========================
 */

var db_data = {
    categories: {
        'default': {
            collections: {
                'dvd': {
                    items: []
                }
            }
        }
    },
    settings: {
        username: 'Guest',
        color: 'blue'
    },
    stats: {
        ls_maxsize: 152,
        last_save: null
    }
};

var other_data = {
    db_size: 0,
    last_save_message: null
};



/**
 * ==========================
 * Local Storage
 * ==========================
 */

var okStorage = (typeof(Storage) !== 'undefined' && 'localStorage' in window);

function save() {
    if (okStorage)
    {
        // update last seen info
        db_data.stats.last_save = (new Date()).getTime();

        // serialize data
        var new_data = JSON.stringify(db_data);
        other_data.db_size = new_data.length; // octets

        // future : EMPECHER DE SAUVEGARDER UNE CHAINE QUI DÉPASSE LA TAILLE
        // MAXIMALE DU LOCALSTORAGE : ca ne marchera pas donc autant afficher un beau
        // message

        // future : gzip the string
        // todo...
        // IL FAUDRA GZIPER AVANT DE CALCULER LA TAILLE :
        // car la compression fera gagner de la place à l'utilisateur

        // save to localStorage
        localStorage.setItem('mylifedb', new_data);
        
        app.last_save_update();
        console.log('Last save : ' + new Date());
    }
    else {
        console.error('Unable to save data in localStorage... Please update your browser!');
    }
}

function load() {
    if (okStorage) {
        var localdata = localStorage.getItem('mylifedb');
        
        if (localdata !== null) {
            try {
                db_data = JSON.parse(localdata);
                other_data.db_size = localdata.length;
                return true;
            }
            catch (err) {
                console.error(err);
            }
        }
        else {
            return true;
        }
    }
    
    console.error('Unable to load data from localStorage... Please update your browser!');
}

load();


/**
 * Size of the database
 */

function used_size() {
    return 'Used : ' + nice_size(other_data.db_size) + ' / ' + nice_size(db_data.stats.ls_maxsize);
}

function nice_size(o) {
    var kB = o / 1000;
    var MB = kB / 1000;

    if (MB > 1) {
        return MB.toFixed(1) + 'MB';
    }
    else if (kB > 1) {
        return kB.toFixed(1) + 'kB';
    }
    else {
        return o + 'B';
    }
}
