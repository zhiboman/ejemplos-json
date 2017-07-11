//
//  DetailViewController.h
//  EjemploWebServices
//
//  Created by trainer on 05/06/14.
//  Copyright (c) 2014 trainer. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface DetailViewController : UIViewController

@property (strong, nonatomic) id detailItem;
@property (weak, nonatomic) IBOutlet UILabel *detailDescriptionLabel;

@end

