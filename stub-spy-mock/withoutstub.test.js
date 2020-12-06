const expect = require('chai').expect;
const getPhotosByAlbumId = require('./index');

describe('without stub: getPhotosByAlbumId', () => {
    it('should getPhotosByAlbumId', (done) => {
        getPhotosByAlbumId(1).then((photos) => {
            expect(photos.length).to.equal(5);
            photos.forEach(photo => {
                expect(photo).to.have.property('id');
                expect(photo).to.have.property('title');
                expect(photo).to.have.property('url');
            });
            done();
        });
    });
});
