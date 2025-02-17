import { TestBed } from '@angular/core/testing';

import { RedisServicesService } from './redis-services.service';

describe('RedisServicesService', () => {
  let service: RedisServicesService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(RedisServicesService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
