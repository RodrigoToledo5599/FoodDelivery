import { ComponentFixture, TestBed } from '@angular/core/testing';
import { PratoComponent } from './prato.component';

describe('PratoComponent', () => {
  let component: PratoComponent;
  let fixture: ComponentFixture<PratoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [PratoComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PratoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
