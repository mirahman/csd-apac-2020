const expect = require('chai').expect;
const getPhotosByAlbumId = require('./index');
const request = require('request');
const sinon = require('sinon');

describe('with Mocking: getPhotosByAlbumId', () => {
    it('should getPhotosByAlbumId', (done) => {
        let photoMock;
        photoMock = sinon.mock(request);

        const demoPhoto = [
            {
                "albumId": 1,
                "id": 1,
                "title": "accusamus beatae ad facilis cum similique qui sunt",
                "url": "https://via.placeholder.com/600/92c952",
                "thumbnailUrl": "https://via.placeholder.com/150/92c952"
            },
            {
                "albumId": 1,
                "id": 2,
                "title": "reprehenderit est deserunt velit ipsam",
                "url": "https://via.placeholder.com/600/771796",
                "thumbnailUrl": "https://via.placeholder.com/150/771796"
            },
            {
                "albumId": 1,
                "id": 3,
                "title": "officia porro iure quia iusto qui ipsa ut modi",
                "url": "https://via.placeholder.com/600/24f355",
                "thumbnailUrl": "https://via.placeholder.com/150/24f355"
            },
            {
                "albumId": 1,
                "id": 4,
                "title": "culpa odio esse rerum omnis laboriosam voluptate repudiandae",
                "url": "https://via.placeholder.com/600/d32776",
                "thumbnailUrl": "https://via.placeholder.com/150/d32776"
            },
            {
                "albumId": 1,
                "id": 5,
                "title": "natus nisi omnis corporis facere molestiae rerum in",
                "url": "https://via.placeholder.com/600/f66b97",
                "thumbnailUrl": "https://via.placeholder.com/150/f66b97"
            }
        ];


        photoMock.expects('get')
            .once()
            .withArgs('https://jsonplaceholder.typicode.com/albums/2/photos?_limit=5')
            .yields(null, null, JSON.stringify(demoPhoto));

        getPhotosByAlbumId(2).then((photos) => {
            expect(photos.length).to.equal(5);
            photos.forEach(photo => {
                expect(photo).to.have.property('id');
                expect(photo).to.have.property('title');
                expect(photo).to.have.property('url');
            });

            photoMock.verify();
            photoMock.restore();
            done();
        });

    });
});