const request = require('request');

const getPhotosByAlbumId = (id) => {
    const requestURL = `https://jsonplaceholder.typicode.com/albums/${id}/photos?_limit=5`;

    return new Promise((resolve, reject) => {
        request.get(requestURL, (err, res, body) => {
            if (err) {
                return reject(err);
            }

            resolve(JSON.parse(body));
        });
    });
}

module.exports = getPhotosByAlbumId 